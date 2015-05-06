# My PHP Journey

## Synopsis

This project is created for both you and I to experience my journey through learning PHP, along the way I will make terrible mistakes I would appreciate if you would notify me of my style violation with a quick issue, any and all suggestions are welcome!

## Code Example

An example of a change I've made from my original algorithm in the form.php I made use of HTML5 form validation instead of a massive amount of if statements.

The new changes are

```PHP
if(isset($_POST["name"], $_POST["email"], $_POST["message"]))
```

and the following HTML5 for the form validation 
```HTML
<input type="text" class="form-control" id="name" name="name" placeholder="John Snow" value="<?php echo $_POST['name']; ?>" required />

```
Show what the library does as concisely as possible, developers should be able to figure out **how** your project solves their problem by looking at the code example. Make sure the API you are showing off is obvious, and that your code is short and concise.

## Motivation

A short description of the motivation behind the creation and maintenance of the project. This should explain **why** the project exists.

## API Reference

In thie repo I make use of [Bootstrap 3](http://getbootstrap.com/ "Bootstrap")

## Tests

Describe and show how to run the tests with code examples.

## Contributors

Let people know how they can dive into the project, include important links to things like issue trackers, irc, twitter accounts if applicable.

## License

A short snippet describing the license (MIT, Apache, etc.)
