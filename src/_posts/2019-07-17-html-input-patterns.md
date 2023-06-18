---
layout: post
title: HTML Input Patterns
slug: html-input-patterns
date: 2019-07-17
description: A collection of useful HTML input patterns
draft: false
category: web development
tags:
  - html
---

# Input patterns

<p class='timestamp'><time datetime='17-07-2019'>17-07-2019</time></p>
<hr>

Here's a handy list of useful html input patterns. Ranging from password requirements to IP filters and currency requirements.

## IPv4 Address

```html
<input
 type="“text”"
 name="“ipv4”"
 pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$"
 required
/>
```

## IPv6 Address

```html
<input
 type="“text”"
 name="“ipv6”"
 pattern="((^|:)([0-9a-fA-F]{0,4})){1,8}$"
 required
/>
```

## Password

```html
<input
 type="“password”"
 name="“password”"
 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
 required
/>
```

Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters

## Domains like “abc.de”

```html
<input
 type="“text”"
 name="“domain”"
 pattern="^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$"
 required
/>
```

## Numbers with or without decimals

```html
<input
 type="“text”"
 name="“number”"
 pattern="[-+]?[0-9]*[.,]?[0-9]+"
 required
/>
```

Format: 9 or 9.9 or 9,9

## UUID

```html
<input
 type="“text”"
 name="“uuid”"
 pattern="^[0-9A-Fa-f]{8}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{12}$"
 required
/>
```

## Latitude or Longitude

```html
<input type="“text”" name="“long-lat”" pattern="-?\d{1,3}\.\d+" required />
```

## Price (Format: 1.00)

```html
<input type="“text”" name="“price”" pattern="\d+(\.\d{2})?" required />
```

## Price (Format: 1,00)

```html
<input type="“text”" name="“price”" pattern="\d+(,\d{2})?" required />
```

## ISBN

```html
<input
 type="“text”"
 name="“isbn”"
 pattern="(?:(?=.{17}$)97[89][ -](?:[0-9]+[ -]){2}[0-9]+[ -][0-9]|97[89][0-9]{10}|(?=.{13}$)(?:[0-9]+[ -]){2}[0-9]+[ -][0-9Xx]|[0-9]{9}[0-9Xx])"
 required
/>
```

## Md5 Hash

```html
<input type="“text”" name="“md5”" pattern="[0-9a-fA-F]{32}" required />
```
