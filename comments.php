<?php // Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

if (post_password_required()) { ?>
    <p class="nocomments">برای مشاهده‌ی دیدگاه‌ها باید رمز نوشته را وارد کنید.</p>
    <?php
    return;
}
?>

<?php if (have_comments()) : ?>
    <?php $args = array(
    'status' => 'approve',
    'number'  => '10',
    );
    $comments = get_comments($args); ?>
    <?php foreach ($comments as $comment) : ?>
    <li>
        <i>
            <h5><?php comment_author(); ?></h5>
            <em><?php comment_date(); ?></em>
        </i>
        <?php comment_text(); ?>
    </li>
    <?php endforeach; ?>
<?php endif; ?>
</ul>
</aside>

<?php if ('open' == $post->comment_status) : ?>
<?php if (get_option('comment_registration') && !$user_ID) : ?>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
    <input placeholder="نام خود را وارد کنید" type="text" name="author" id="author">
    <input class="email_field" type="text" name="url" id="url" placeholder="مشخصات تماس (آدرس ایمیل، شماره تلفن، تلگرام و...)" />
    <textarea placeholder="خاطره خود با مهدی مقدم را اینجا یادداشت فرمایید" name="comment" id="comment"></textarea>
    <button>ثبت</button>
    <?php comment_id_fields(); ?>
    <?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; ?><?php endif; ?>