# Fake-News

My first project in php to create a newsfeed containing Fake News!


## Installation
To view the project start by cloning it down to your own computer:
```
$ git clone https://github.com/Vstranne/Fake-News.git
```
Start a local php server:
```
$ php -S localhost:8000
```
Now all you have to do is write localhost:8000 in the adress field on your web browser.

## Code Review by [Felix Östergren](https://github.com/felixgren):
- Very clean file structure.
- Good documentation, makes it easy to review and understand.
- Images are lacking alt attributes which are important for accessibility.
- Styling files could be moved into their own folder 
- `styles.css:1-13` - Body has a default margin of 8px which results in small side scrolling. This can be resolved by removing 100% width or setting margin to 0.
- `functions.php:17-76` - Code could be refactored to be shorter by using DateTime::diff, but I think that your own implementation is very impressive :ok_hand:
- `functions.php:77-78` - Don't leave commented code that's not going to be used.

Other testers of the site:


