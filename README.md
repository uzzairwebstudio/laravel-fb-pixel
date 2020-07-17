This package offers you FB Pixel script as Laravel component. You can include the component in any Blade files.
Once you installed, you can do stuff like this;

```
    <x-uws-fb-pixel pixel-id="123456789" />

```

## Installation
 1. First and foremost, you need to `require` the package.
    ```
	 composer require uzzairwebstudio/laravel-fb-pixel
    
    ```

 2.  Then, publish the vendor files. This will publish View/Component file and views file   into your app.
   ```
   php artisan vendor:publish --tag="uws-fb-pixel-views"
   php artisan vendor:publish --tag="uws-fb-pixel-view-component"
   
   ```
 3. Finally, you can place the component in your blade file like this and place your FB Pixel ID in `pixel-id`   parameter;     
     ```
     <x-uws-fb-pixel pixel-id="YOUR_FB_PIXEL_ID"/>
     
     ```
