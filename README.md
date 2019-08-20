# Quantum Manager
## File manager for Joomla!
### Sections
- [Description] (#description)
- [Screenshots] (#screenshots)
- [Features] (# features)
- [Planned features] (#Planned features)
- [Override standard manager] (#override-standard-manager)
- [Architecture] (#architecture)
- [Documentation] (#documentation)
- [License] (#license)
- [Requirements] (#requirements)
- [Developer] (#developer)
- [Support] (#support)



### Description
Free file manager for Joomla! with the help of which you can upload, edit and paste files (as well as fields) into the editor.
It is possible to override the calls of the standard file manager.

### Screenshots
#### Call from a field of type media
|||
| ------------- | ------------- |
| ![Screenshot Quantum Manager 1](https://hika.su/images/screenshots/quantummanager/1.png)  | ![Screenshot Quantum Manager 2](https://hika.su/images/screenshots/quantummanager/2.png)  |
| ![Screenshot Quantum Manager 3](https://hika.su/images/screenshots/quantummanager/3.png)  |  |

#### Paste into the editor
|||
| ------------- | ------------- |
| ![Screenshot Quantum Manager 6](https://hika.su/images/screenshots/quantummanager/6.png)  | ![Screenshot Quantum Manager 5](https://hika.su/images/screenshots/quantummanager/7.png)  |
| ![Screenshot Quantum Manager 8](https://hika.su/images/screenshots/quantummanager/8.png)  |  |

#### Settings
|||
| ------------- | ------------- |
| ![Screenshot Quantum Manager 4](https://hika.su/images/screenshots/quantummanager/4.png)  | ![Screenshot Quantum Manager 5](https://hika.su/images/screenshots/quantummanager/5.png)  |


### Opportunities
- Upload files
- Change the format of images (jpg, png, webp)
- Add postfix for file names
- Saving original images
- Automatic image resize
- Cropping images (used by Cropper.js: https://fengyuanchen.github.io/cropperjs)
- Adding a watermark (with its percent change under the image)
- Restriction of rights to actions in the manager for different user groups
- Multilingualism (currently supported by Russian and English)

### Planned features
- Adding integration with the clouds (Ya.Disk, Google Drive)
- Editing text files using Codemirror with a file tree, with which you can switch to other files
- Simple audio player for playing audio

### Override the standard manager
A plugin has been created that redefines the calls of the standard manager.
- Description of [Quantum Manager Media] (https://github.com/Delo-Design/quantummanagermedia)
- You can download it here: [Go] (https://github.com/Delo-Design/quantummanagermedia/releases)

### Architecture
The manager is composite. Each part is autonomous, which does not require other parts. (At the moment, autonomy has not yet been brought, it will be fixed in the next releases).
All parts are interconnected events in javascript, to which you can also connect in your scripts, to customize the behavior of the manager. (Events will be described later)

Manager Parts:
- Directory tree
- Download files
- File and directory browsing area
- Toolbar action
- Cropper.js
- Codemirror (not yet implemented)
- Search (not yet implemented)
- Recently opened directories (not yet implemented)
- Pinned directories (not yet implemented)

Every part is on the Joomla side! - field JForm. At the front, parts are called modules.

Thus, you can compose and combine parts of the manager as you wish in your forms that use the JForm constructor.

### Documentation
Will be created later.

### License
GPLv3

### Requirements
- Joomla >=3.9
- PHP >=7.0
- jinterventionimage library (https://github.com/Delo-Design/jinterventionimage)

### Developer

Developer
Company "Business Design" https://delo-design.ru
NorrNext - https://www.norrnext.com

Official Information:
- [Product page in Russian] (https://hika.su/rasshireniya/quantum-manager)
- [Product page in English] (https://www.norrnext.com/quantum-manager)
- [JED Page] (https://extensions.joomla.org/extension/quantum-manager/)

[Support Forum in Russian] (https://www.norrnext.com/forum/quantum-manager-ru)



English:
Quantum is a free file and media manager for Joomla.   
- [Product official page](https://www.norrnext.com/quantum-manager)
- [Quantum in JED](https://extensions.joomla.org/extension/quantum-manager/)
- [Localizations](https://www.norrnext.com/quantum-manager-localizations)
- [Support](https://www.norrnext.com/forum/quantum-manager)

### Поддержка
- [quantum@hika.su](mailto:quantum@hika.su) (email)
- [@tsymbalmitia](tg://resolve?domain=tsymbalmitia) (telegram) 
