---
layout: post
title: HTTP2 on Apache - Linux
slug: http2-on-apache-linux
date: 2019-08-27
description: Learn how to set up http2 on Apache
draft: false
category: server
tags:
  - security
---

# HTTP2 on Apache - Linux

<p class='timestamp'><time datetime='27-08-2019'>27-08-2019</time></p>
<hr>

To enable http2 support on Apache you need to load the following two modules:

- SSL
- HTTP/2

To do so, run the following commands in your terminal

```bash
sudo a2enmod ssl
```

And

```bash
sudo a2enmod http2
```

Then activate the new modules by restarting Apache

```bash
sudo systemctl restart apache2
```

After activating the Apache modules, navigate to the Apache directory and edit the configuration.
Simply add the following line to your global Apache configuration or inside an individual virtual hos.

```htaccess
Protocols h2 http/1.1
```

## Example

```htaccess
<VirtualHost *:443>

  ServerName triss.dev
  ServerAlias www.triss.dev
  DocumentRoot /var/www/public_html/triss.dev
  SSLEngine on
  SSLCertificateKeyFile /path/to/private.pem
  SSLCertificateFile /path/to/cert.pem
  SSLProtocol all -SSLv3 -TLSv1 -TLSv1.1

  Protocols h2 http/1.1

</VirtualHost>
```
