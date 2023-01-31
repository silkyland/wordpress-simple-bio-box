# WordPress Simple Bio Box

To add the [simple_bio_box] shortcode to every post on your WordPress website, you can add the shortcode to your single post template file.

![WordPress Simple Bio Box](https://github.com/silkyland/wordpress-simple-bio-box/blob/main/ss.png)

## Adding the [simple_bio_box] shortcode to every post on WordPress

To display the bio box in every single post on your WordPress website, you can add the `[simple_bio_box]` shortcode to your single post template file.

Here's how to do it:

1. Go to your WordPress dashboard and navigate to "Appearance" > "Editor".
2. From the right-side file list, select the "Single Post" template file, typically named "single.php".
3. Find the place in the template file where you want to display the bio box. A common place is right before the comments section.
4. Add the following line of code to the desired location:
```php
    <?php echo do_shortcode('[simple_bio_box]'); ?>
```
5. Save the file and view your website to see the bio box in action.

Now, the bio box will be displayed at the specified location in every single post on your WordPress website.
