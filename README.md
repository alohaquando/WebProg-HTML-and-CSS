# WebProg-HTML-and-CSS

This is shared repo for WebProg assignment 1.

Guide:

1. How to implemenent footer and header:
    - Copy the following code to your <head>
          ```
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
          <script src="script.js"></script>
           ```
  
    - Copy this to the top of your <body>
          ```<header id="nav_header"></header>```
  
    - Copy this to the bottom of your <body>
          ```<footer id="mall_footer"></footer>```
  
    - Wrap your main content insinde this div
          ```<div class="body_spacing"> [YOUR CONTENT HERE] </div>```
      This div maintains a consistent spacing across our whole website. You can read about it inside Pages/CSS/spacing.css
      
      
2. Please take a read through our defined CSS files inside Pages/CSS to understand what has already been made and try to reuse them. Certain elements like
table, h1, h2, h3, h4, h5, a, p, button has already been styled.

3. Don't use any inline CSS. If you need more CSS code:
    - Make your CSS code inside Pages/CSS
    - Open main.css
    - Add @import yourcssfilehere.css;

