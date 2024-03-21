# Password Generator
![carbon (12)](https://github.com/ICWR-TEAM/passGen/assets/45759837/16b55096-64bc-4502-aeee-287e84ca9ebe)

### How To Use

CLI ( Command Line Interface )

1. Install php
2. Clone this github repo
3. Run php main.php
4. Go to passGen directory
5. Enter how many characters


Web Server


1. Install Web Server
2. Clone this github repo / main.php
3. Include main.php
4. Call the method in this way ```echo (new Main())->proc_website();```

### Notes

CLI ( Command Line Interface ): Run ```php main.php -h``` for help

Web Server
You can use parameters in passGen using the example below
```php
<?php
echo (new Main())->proc_website(
  char: "abcdefgKPOL123",
  count: 12
);
?>
```

### License
![286463407-3b0399d0-6d0d-4dd9-8a2d-be69d670ae69](https://github.com/ICWR-TEAM/passGen/assets/45759837/0c8c50b4-ff8b-4d7c-8307-a502fbc2473d)
