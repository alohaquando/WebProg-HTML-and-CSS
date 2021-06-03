View here https://s3800978.github.io/WebProg-HTML-and-CSS/

# Project Groups 12

- Do Hoang Quan • S3800978
- Huynh Quoc Thinh • S3820374
- Taehyeon Jeong • S3799019
- Hoang Pham Duc Anh • S3877340

# Contribution of Fullstack Assignment

# A. Individual Tasks

1. Do Hoang Quan • S3800978

   - Display the new stores, featured stores, new products, and featured products based on the CSV files. (PHP02)
   - A simple CMS (PHP03)
   - Implement the behavior of the Store Home page (PHP07)

2. Huynh Quoc Thinh • S3820374

   - Implement the behavior of Browse Stores by Name and Browse Stores by Category pages (PHP06)
   - Implement the behavior of the Browse Products by Created Time (PHP08)
   - Implement the behavior of the Product Detail and Order Placement pages (PHP09)
   - Time-sort.php

3. Taehyeon Jeong • S3799019

   - Installation script (PHP01)
   - Implement the My Account and Login pages (PHP04)
   - Store registration information on external files on the server (PHP05)

4. Hoang Pham Duc Anh • S3877340

   - Only front-end of CMS page.

# B. Sharing Works (Quan, Thinh, Tae)

1.  CSV.php
2.  display.php
3.  register.php

# C. Thoughts

- Our group chose "Fairness" is a rule, that means members can choose tasks that they would like to work on. However, Duc Anh did not pick his tasks and he waited until 22 May 2021 to choose the task. From both Assignment 2 and Fullstack Assignment, he only picked 1 task and was not able to complete that his task on time. To be honest, it is totally fine if he could not finished his task on time, but he did not ask for help earlier but until only few hours left of the due day. From the start of this semester, we only met him ONCE and he barely communicated with teammate.

# End of Contribution

Task allocation #Assignment 2: https://trello.com/b/IR6MaV8S/to-do-javascript
<br>
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
