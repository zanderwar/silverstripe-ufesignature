# silverstripe-ufesignature
A digital e-signature integration for silverstripe userforms

## Requirements
[SilverStripe ^3.1](https://github.com/silverstripe/silverstripe-cms/tree/3)

[SilverStripe Userforms >=3.1 < 4.3](https://github.com/silverstripe/silverstripe-userforms/)

## How to install

### Composer
```composer require "quadra-digital/silverstripe-ufesignature":"^1.0.0"```

### Manually
- Download the code base by either cloning this repository or downloading the provided .zip file
- Download the dependencies listed in requirements
- Install module into your site's root directory

### Configuration
Run ```dev/build``` && ```?flush=all```
You should now see a new field type when adding a user defined form named "signature".

## How it works
ufesignature is a module which uses [signature_pad](https://github.com/szimek/signature_pad/).
To use just draw your signature in the field with your mouse pointer and that's it! 

### Front-end of the form field
![screenshot](images/ufesignature-frontend.png)

### Post-submission in the CMS
![screenshot](images/ufesignature-cms.png)

## License
This module uses the BSD-3-Clause license. See the [LICENSE.md](LICENSE.md) file for the full license.

## Copyright
Copyright (c) 2017, [Quadrahedron Limited](https://www.quadradigital.co.uk) All rights reserved.

## Contact
This module is built by [Quadra Digtial](https://www.quadradigital.co.uk) and has been made open source for free, we are unlikely to be able to offer much support however if you have any queries regarding usage, licensing, bugs or improvements - please use one of the appropriate contacts below.

### Technical
Jack O'Connor <jack.oconnor@quadradigital.co.uk>

### Administrative
Ping Ho <ping.ho@quadradigital.co.uk>
