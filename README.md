# jGallery Wordpress plugin.

A lightweight and responsive JavaScript image and videos(youtube, vimeo and mp4) gallery library.

## Sponsor

Publicidade BH - Apps, Sistemas e sites - https://www.publicidadebh.com.br/

## Features

- 🖼️ Responsive image gallery
- 🚀 Lightweight and fast
- 🎨 Customizable styling
- 📱 Mobile-friendly
- 🔍 Image zoom support
- ⌨️ Keyboard navigation
- 🎯 Easy to integrate

## Installation

Copy the folder to your wordpress plugins folder and activate it.

## Usage

```php
do_shortcode('[jgallery images="./wp-content/uploads/2025/02/image2.jpg, ./wp-content/uploads/2025/02/image1.jpg"]');
```

## Events
### Resize
is fired when the content dimensions are recalculated
```javascript
.on('jgallery.resize', function (e) {
	console.log('jgallery.resize');
})
```
### Open
is fired when the open the lightbox
```javascript
.on('jgallery.open', function (e) {
	console.log('jgallery.open');
})
```
### Change
is fired when the content is changed
```javascript
.on('jgallery.change', function (e) {
	console.log('jgallery.change');
})
```
### Loaded
is fired when the content is fully loaded
```javascript
.on('jgallery.loaded', function (e) {
	console.log('jgallery.loaded');
})
```
### Close
is fired when the lightbox is closed
```javascript
.on('jgallery.close', function (e) {
	console.log('jgallery.close');
})
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Opera (latest)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Author

Leandro Lopes - leandrolopes.java@gmail.com - [GitHub Profile](https://github.com/leandrolopes13)

## Acknowledgments

- Thanks to all contributors who have helped make jGallery better
- Inspired by various gallery libraries in the JavaScript ecosystem
