neat-little-uploader-cakephpfriendly (v1.00)
============================

Inspired by lewisd's neat-little-uploader

Requirements
------------

Jquery
Some server-side configuration?

Installation
------------

**Note:** this is a working (and tested) plugin for CakePhp 2.9+

1. Pop the contents of the repo into your plugin directory ("/app/plugin").
2. Make sure you end up with an *uploads* folder with the appropriate write permissions in the webroot folders for files ("/app/webroot/files/").
3. Declare your plugin in Cakephp's bootstrap file 

    ```php
    CakePlugin::load('NeatUploader', array('bootstrap' => false, 'routes' => false));
    ```
4. Declare the Helper for NeatUploader in the controller (or the *AppController* if site-wide access )

    ```php
    public $helpers = array("NeatUploader.NeatUploader");    
    ```

5. Create the datatable *documents* for the Document model (where you are going to store original filenames and actual filename with columns:

 id *int(11)*
 ref *varchar(255)*
 ref_id *int(11)*
 filename *varchar(255)*
 original *varchar(255)*
 created *datetime*
 modified *datetime*

6. Using the helper, use *init* function in your header to initiate loading of css and js

   ```php
   echo $this->NeatUploader->init();
   ```
    
7. integrate in your view with the helper, specify the model that the file should be linked to (*example* $ref = "Post");

  ```php
  echo $this->NeatUploader->show($ref)
  ```

Usage
-----

1. Click or drag a file into the dotted area to start the upload process. 
2. The file will be placed into the uploads folder and given a unique id to prevent naming collisions.


Browser Compatibility
---------------------

IE10+, Firefox 4+, Safari 5+, Chrome 7+


Configuration Options
---------------------

*...are fairly limited at this point.*

License
-------

neat-little-uploader is open-sourced software licensed under the MIT License.


Contact
-------

- Olivier Levy (olivier@snapevent.fr)
- github.com/motses
