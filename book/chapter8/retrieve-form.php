Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@zAN41k 
oreillymedia
/
Learning_PHP
36
5154
Code
Issues
Pull requests
1
Actions
Projects
Wiki
Security
Insights
Learning_PHP/code/dbs/retrieve-form.php /
@davidsklar
davidsklar Initial commit of 'Learning PHP' code examples
Latest commit fbef09b on Apr 29, 2016
 History
 1 contributor
40 lines (35 sloc)  1.07 KB
 
<form method="POST" action="<?= $form->encode($_SERVER['PHP_SELF']) ?>">
<table>
    <?php if ($errors) { ?>
        <tr>
            <td>You need to correct the following errors:</td>
            <td><ul>
                <?php foreach ($errors as $error) { ?>
                    <li><?= $form->encode($error) ?></li>
                <?php } ?>
            </ul></td>
    <?php }  ?>

    <tr>
        <td>Dish Name:</td>
        <td><?= $form->input('text', ['name' => 'dish_name']) ?></td>
    </tr>

    <tr>
        <td>Minimum Price:</td>
        <td><?= $form->input('text',['name' => 'min_price']) ?></td>
    </tr>

    <tr>
        <td>Maximum Price:</td>
        <td><?= $form->input('text',['name' => 'max_price']) ?></td>
    </tr>

    <tr>
        <td>Spicy:</td>
        <td><?= $form->select($GLOBALS['spicy_choices'], ['name' => 'is_spicy']) ?>
        </td>
    </tr>

    <tr>
        <td colspan="2" align="center">
            <?= $form->input('submit', ['name' => 'search',
                                        'value' => 'Search']) ?></td>
    </tr>
</table>
</form>
© 2020 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About

