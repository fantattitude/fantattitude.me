---
layout: post
title:  "HAML and \"each\" last index"
author: "Vivien Leroy"
date:   2012-09-30 01:00:00
categories: ruby haml
color: 4
---

Still coding my blog, I just encountered a quite simple problem.
How to distinguish the last element from a Ruby **each** loop.

Well it's quite simple in fact and here's how to do it : 

~~~haml
- @posts.each_with_index do |post, index|
  = render post
  - if index != @posts.size - 1
    %hr
~~~

So you replace **each** by **each\_with\_index** and now you get the index along with the object and you can easily check if it's last object by querying the size of the array.

Update (as [@Kaoo](http://twitter.com/Kaoo) pointed out there's an even more clean solution) : 

~~~haml
- @posts.each do |post|
  = render post
  - if post != @posts[-1]
    %hr
~~~

Now you're good to go !