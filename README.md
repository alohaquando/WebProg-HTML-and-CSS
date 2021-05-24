View here https://s3800978.github.io/WebProg-HTML-and-CSS/

# Project Groups 12

- Do Hoang Quan • S3800978
- Huynh Quoc Thinh • S3820374
- Taehyeon Jeong • S3799019
- Hoang Pham Duc Anh • S3877340

Task allocation #Assignment 2: https://trello.com/b/IR6MaV8S/to-do-javascript
Task allocation #Assignment 3: https://trello.com/b/wbVqNQKM/fullstack-assignment

# WebProg-HTML-and-CSS

This is shared repo for WebProg assignment 1.

Guide:

1. Where to put your HTML file and some basics:

- Put them inside the Pages directory with the name from Zeplin. Replace any space with "-". Ex: 5.2.1 Store Policy -> 5.2.1-Store-Policy.
- Reference our main CSS file in your HTML with this code inside your `<head>`. You can add more CSS by following Guide 4 below.

```
<link rel="stylesheet" href="CSS/main.css" />
```

<hr />

2. How to implemenent footer and header:
   Our footer sticks to the bottom by making the whole body a flexbox, and then making the footer flex 1. If you're using CSS collumns, this might break your layout. You can read Pages/CSS/footer.css, spacing.css, header.css to understand how our footer and header was made.

- Copy the following code to your `<head>`

```
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<script src="JS/load-header-and-footer.js"></script><script src="JS/1-cookie.js"></script>

```

- Copy this to the top of your `<body>`

```
<header id="nav_header"></header>
```

- Copy this to the bottom of your `<body>`

```
<footer id="mall_footer"></footer>
```

- Wrap your main content insinde this div

```
<div class="body_spacing"> [YOUR CONTENT HERE] </div>
```

This div maintains a consistent spacing across our whole website. You can read about it inside Pages/CSS/spacing.css

<hr />

3. Please take a read through our defined CSS files inside Pages/CSS to understand what has already been made and try to reuse them. Certain elements like
   table, h1, h2, h3, h4, h5, a, p, button has already been styled.

<hr />

4. Don't use any inline CSS. If you need more CSS code:
   - Make your CSS code inside Pages/CSS
   - Open main.css
   - Add `@import yourcssfilehere.css;`
