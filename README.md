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

This project makes use of [Bootstrap 3](http://getbootstrap.com/ "Bootstrap") for templating the webpage.


## License

The MIT License (MIT)

Copyright (c) 2015 Skyler Layne

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.