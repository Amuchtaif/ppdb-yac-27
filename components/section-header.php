<?php
/**
 * Reusable Section Header Component
 * $eyebrow, $heading, $description, $align (center|left), $dark (true|false)
 */
$align = $align ?? 'center';
$dark = $dark ?? false;
$textAlignClass = $align === 'center' ? 'text-center max-w-3xl mx-auto' : 'text-left max-w-2xl';
?>
<div class="mb-12 md:mb-16 <?= $textAlignClass ?>">
    <?php if (!empty($eyebrow)): ?>
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-3.5 <?= $dark ? 'bg-[#D4AF37]/20 text-[#E8D595] border border-[#D4AF37]/30' : 'bg-[#DBEAFE] text-[#183B68]' ?>">
            <?= htmlspecialchars($eyebrow) ?>
        </span>
    <?php endif; ?>

    <?php if (!empty($heading)): ?>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-[42px] leading-tight mb-4 <?= $dark ? 'text-white' : 'text-[#0B192C]' ?>">
            <?= htmlspecialchars($heading) ?>
        </h2>
    <?php endif; ?>

    <?php if (!empty($description)): ?>
        <p class="text-base sm:text-lg leading-relaxed <?= $dark ? 'text-slate-300' : 'text-[#64748B]' ?>">
            <?= htmlspecialchars($description) ?>
        </p>
    <?php endif; ?>
</div>
