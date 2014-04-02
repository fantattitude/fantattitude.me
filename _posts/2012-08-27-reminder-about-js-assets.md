---
layout: post
title:  "Reminder about JS assets"
author: "Vivien Leroy"
date:   2012-08-27 02:00:00
categories: ruby javascript
color: 3
---

Maybe you ever experienced the awful situation in which you find some JS methods called twice on your website when in development environment.

I just did and forgot how I got it fixed last time so after some search I remembered why !

It's because you called this on your dev environment, but it's not necessary if you use assets pipeline magic :

~~~ bash
rake assets:precompile
~~~

So just remove the precompiled assets via (make sure you're in project root folder) : 

~~~ bash
rm -rf public/assets
~~~