This package offers you FB Pixel script as Laravel 7 component. You can include the component in any Blade files.

Once you installed, you can do stuff like this;
```php
<x-uws-fb-pixel pixel-id="123456789" />
<script>
fbq('track', 'Purchase', {currency: "USD", value: 30.00});
</script>
```

## Installation
First and foremost, you need to `require` the package.

```bash
composer require uzzairwebstudio/laravel-fb-pixel 
```
Then, publish the vendor files. This will publish View/Component file and views file into your app.
```bash
php artisan vendor:publish --tag="uws-fb-pixel-views"
php artisan vendor:publish --tag="uws-fb-pixel-view-component"
```
Finally, you can now place the component in your blade file like this and place your FB Pixel ID in `pixel-id` parameter;
```php
<x-uws-fb-pixel pixel-id="YOUR_FB_PIXEL_ID"/>
```
## License

The MIT License (MIT).
