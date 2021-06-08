<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <p>Includin php into html
                    <?php echo "this is the original way with <pre><?php ?></pre>" ?>
                    <? echo "But we can also use shorthand if it's enabled" ?>
                </p>
                <p>If we wanna make multiple lines with mixed contents we can do this way:
                    <?php if (1 == 1) : ?>
                        This will show if the expression is true.
                        <?php echo "<pre><?php else: ?></pre>"; ?>
                    <?php else : ?>
                        We can use : mark for it
                        Otherwise this will show.
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>