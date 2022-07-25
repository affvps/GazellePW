<?
View::show_header(t('server.donate.donate'), '', 'PageDonateStep1');
?>

<div class="LayoutBody" id="donate_information">
    <div class="BodyHeader">
        <h2 class="BodyHeader-nav"><?= t('server.donate.donate') ?></h2>
    </div>
    <div class="BoxBody donation_info HtmlText" id="Donate-Overview-mdx"></div>
</div>

<?
View::show_footer();
?>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        lang.render('Donate/Overview.mdx')
    })
</script>