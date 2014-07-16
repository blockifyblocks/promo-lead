<?php $block->open('section'); ?>
    <div class="rotate rotate-orchestrating" style="background-image: url(<?= $block->document['image'] ?>);">
        <div class="overlay"></div>
        <a class="promo-lead-anchor block" href="<?= $block->document['url']; ?>"></a>
        <div class="col-md-6 col-md-push-3 hgroup">
            <div class="row">
                <?= $block->document->tag('h1', 'name'); ?>
                <?= $block->document->tag('h2', 'description'); ?>
<?php if (!empty($block->options['buttons'])) {
    block('blockify-buttons', $block->options['buttons'], false, false);
} ?>
            </div>
        </div>
    </div>
<?php $block->close();