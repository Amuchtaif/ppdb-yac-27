<?php
// Program Metadata Mapping for distinct visual identity
$programStyles = [
    'tkit' => [
        'icon' => 'sparkles',
        'number' => '01',
        'color_bg' => 'bg-amber-500',
        'icon_bg' => 'bg-amber-50 text-amber-700 border-amber-200/80',
        'pill_bg' => 'bg-amber-100/70 text-amber-800 border-amber-200'
    ],
    'sdit' => [
        'icon' => 'book-open',
        'number' => '02',
        'color_bg' => 'bg-blue-600',
        'icon_bg' => 'bg-blue-50 text-blue-700 border-blue-200/80',
        'pill_bg' => 'bg-blue-100/70 text-blue-800 border-blue-200'
    ],
    'mts' => [
        'icon' => 'building-2',
        'number' => '03',
        'color_bg' => 'bg-teal-600',
        'icon_bg' => 'bg-teal-50 text-teal-700 border-teal-200/80',
        'pill_bg' => 'bg-teal-100/70 text-teal-800 border-teal-200'
    ],
    'ma' => [
        'icon' => 'graduation-cap',
        'number' => '04',
        'color_bg' => 'bg-[#1E4E8C]',
        'icon_bg' => 'bg-indigo-50 text-[#1E4E8C] border-indigo-200/80',
        'pill_bg' => 'bg-indigo-100/70 text-[#1E4E8C] border-indigo-200'
    ],
    'idad' => [
        'icon' => 'languages',
        'number' => '05',
        'color_bg' => 'bg-purple-600',
        'icon_bg' => 'bg-purple-50 text-purple-700 border-purple-200/80',
        'pill_bg' => 'bg-purple-100/70 text-purple-800 border-purple-200'
    ],
    'mahadaly' => [
        'icon' => 'award',
        'number' => '06',
        'color_bg' => 'bg-amber-600',
        'icon_bg' => 'bg-amber-50 text-amber-800 border-amber-200/80',
        'pill_bg' => 'bg-amber-100/70 text-amber-900 border-amber-200'
    ]
];

$slug = $prog['slug'] ?? 'sdit';
$style = $programStyles[$slug] ?? $programStyles['sdit'];
?>

<div class="program-card bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-xs hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between group relative overflow-hidden">
    <!-- Top Left Colored Accent Indicator -->
    <div class="absolute top-0 left-0 w-24 h-1.5 <?= $style['color_bg'] ?> rounded-br-full transition-all duration-300 group-hover:w-full"></div>

    <div>
        <!-- Card Header: Icon Avatar & Number Watermark -->
        <div class="flex items-start justify-between gap-4 mb-5 pt-2">
            <div class="w-12 h-12 rounded-2xl <?= $style['icon_bg'] ?> border shadow-xs flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                <i data-lucide="<?= $style['icon'] ?>" class="w-6 h-6"></i>
            </div>
            
            <div class="flex items-center gap-3">
                <span class="px-3 py-1 text-[10px] font-extrabold uppercase tracking-wider rounded-full border <?= $style['pill_bg'] ?>">
                    <?= htmlspecialchars($prog['badge']) ?>
                </span>
                <span class="font-heading font-extrabold text-2xl text-slate-200 group-hover:text-slate-400 transition-colors select-none">
                    <?= $style['number'] ?>
                </span>
            </div>
        </div>

        <!-- Program Name & Tagline -->
        <div class="mb-3">
            <h3 class="font-heading font-extrabold text-xl text-[#0B192C] group-hover:text-[#1E4E8C] transition-colors leading-snug">
                <?= htmlspecialchars($prog['name']) ?>
            </h3>
            <p class="text-xs font-bold text-[#8A6A16] mt-0.5 tracking-wide">
                <?= htmlspecialchars($prog['tagline']) ?>
            </p>
        </div>

        <!-- Program Description & Bullet Features List -->
        <?php if (!empty($prog['features']) && is_array($prog['features'])): ?>
            <ul class="space-y-2.5 mb-6">
                <?php foreach ($prog['features'] as $feat): ?>
                    <li class="text-xs text-slate-600 leading-relaxed flex items-start gap-2">
                        <span class="w-1.5 h-1.5 rounded-full <?= $style['color_bg'] ?> shrink-0 mt-1.5"></span>
                        <span><?= htmlspecialchars($feat) ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6">
                <?= htmlspecialchars($prog['description']) ?>
            </p>
        <?php endif; ?>
    </div>

    <!-- Bottom Action Button -->
    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
        <a href="#biaya" onclick="document.querySelector('[data-target=\'<?= htmlspecialchars($prog['slug']) ?>\']')?.click()" class="w-full py-3 px-4 rounded-xl font-heading font-bold text-xs sm:text-sm bg-[#1E4E8C] hover:bg-[#122947] text-white shadow-sm hover:shadow-md transition-all duration-300 flex items-center justify-center gap-2 group/btn">
            <span>Rincian Biaya & Informasi</span>
            <i data-lucide="arrow-right" class="w-4 h-4 transform group-hover/btn:translate-x-1 transition-transform"></i>
        </a>
    </div>
</div>



