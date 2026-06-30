# La trahison des images — *responsively*

A responsive web rendering of René Magritte's 1929 painting
**[*La trahison des images*](https://en.wikipedia.org/wiki/The_Treachery_of_Images)**
— better known by the words written across it, *« Ceci n'est pas une pipe »*
("This is not a pipe").

Live at **[la-trahison-des-images.be](https://www.la-trahison-des-images.be/)**.

## The idea

The original painting depicts a pipe above the caption *« Ceci n'est pas une
pipe »*. Magritte's point: the image of a pipe is not itself a pipe.

This project plays with that idea on the web. The caption is split into three
parts — **ceci**, **n'est pas**, and **une pipe** — and laid out side by side.
The middle word, *n'est pas* ("is not"), stretches to fill whatever width the
browser window has. So the sentence is never quite the same shape twice: the
treachery of the image becomes literally *responsive*.

## Running it locally

The page only needs a server that can run PHP. From the project root:

```bash
php -S localhost:8000
```

Then open <http://localhost:8000> and resize the window to watch the pipe
stretch.

## Credits & license

Created by **[ax710](http://www.ax710.org/)** & **[y-a-v-a.org](http://www.y-a-v-a.org/)**.

This work is licensed under a
[Creative Commons Attribution 3.0 Netherlands License (CC BY 3.0 NL)](http://creativecommons.org/licenses/by/3.0/nl/).
