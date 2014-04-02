---
layout: post
title:  "Deal with mail duplicates using IMAP protocol"
author: "Vivien Leroy"
date:   2012-11-16 01:00:00
categories: mail imap duplicates
color: 2
---

My school, [Supinfo](http://supinfo.com/), is using Microsoft's solution for businesses and institutions to provide its students with email addresses. So we basically have **live.com** email but with **@supinfo.com** domain and without the fancy new UI of the webmail :(.

![Awful Outlook web app](/images{{ page.id }}/mailbox.png)

I came to realize some months ago that my account was full (even though it's supposed to be able to handle 10GB of datas). When I checked, my account was full of duplicate emails, I'm not sure about it but I think this is related to the fact I like to test loads of email clients and maybe I messed with one taking me to go from 4.000 mails to 72.000 mails (huge difference right :P ?).

Last night I decided it was time to try to get away from the situation, even though it was not critical because I made space by removing some duplicates.

- First I tried to use the web interface, this was not successful and painfully slow (remember hotmail.com ?) and I'm kind it was buggy as hell and shit.
- Then I tried via Sparrow, nothing for duplicates.
- Then with Mail.app (found a script but was awfully slow)
- Then I searched for an alternative solutions like using Gmail as an IMAP Client to use Gmail scripts to remove duplicates but it didn't seem to work this way neither.
- And when all hope was gone and I was crying in a corner of my living room in fetal position. I thought about searching "IMAP duplicates".

And I discovered :

### IMAPdedup.py !!

IMAPdedup is a python script written by Quentin Stafford-Fraser which really simply connects to any IMAP mailbox and then use IMAP Message-IDs (or MD5 sum of some of the email fields) to gather a list of all messages which are duplicates and delete them from the server. It works as easy as this line : 

~~~ bash
./imapdedup.py -s [server address] -p [port] -x -u [username] -w [password] -v -c [mailbox]
~~~

And it fucking does its job.

One amazing thing is even at the end it didn't slow down because of the number of emails it had to care about it was really impressive. 

![YEAH SPAAAACE](/images{{ page.id }}/quota.png)

In my case it took I think approximately 4 or 5 hours to complete (72k mails is a HUUUGE amount), and from now on I'm the proud (errr not really in fact) owner of a freed from duplicates live.com account.

The script is available on Github here, if you appreciate Quentin's work please star the repository he deserves it !

[https://github.com/quentinsf/IMAPdedup](https://github.com/quentinsf/IMAPdedup)
