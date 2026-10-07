<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <?php foreach ($schedules as $key => $group): ?>
        <div class="bg-white rounded-3xl p-6 lg:p-5 xl:p-6 border border-[#E2E8F0] shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group/card relative overflow-hidden">
            <!-- Top Accent Blue Line -->
            <div class="absolute top-0 left-0 right-0 h-1 bg-[#1E4E8C]"></div>

            <div>
                <!-- Group Header -->
                <div class="flex items-center gap-3 mb-6 pt-1">
                    <div class="w-11 h-11 rounded-2xl bg-[#EFF6FF] text-[#1E4E8C] group-hover/card:bg-[#1E4E8C] group-hover/card:text-white transition-colors duration-300 flex items-center justify-center shrink-0 border border-[#DBEAFE] shadow-xs">
                        <i data-lucide="<?= htmlspecialchars($group['icon']) ?>" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <span class="px-2.5 py-0.5 text-[10px] font-extrabold uppercase tracking-wider rounded-full bg-[#1E4E8C] text-white">
                            <?= htmlspecialchars($group['badge']) ?>
                        </span>
                        <h3 class="font-heading font-extrabold text-base xl:text-lg text-[#0B192C] leading-tight mt-1">
                            <?= htmlspecialchars($group['name']) ?>
                        </h3>
                    </div>
                </div>

                <!-- Agenda Timeline Items -->
                <div class="relative ml-3.5">
                    <?php 
                    $totalItems = count($group['items']);
                    foreach ($group['items'] as $index => $item): 
                        $isFirst = ($index === 0);
                        $isLast = ($index === $totalItems - 1);
                    ?>
                        <div class="relative pl-6 pb-6 last:pb-0 group/item">
                            <!-- Connecting Line -->
                            <?php if ($totalItems > 1): ?>
                                <?php if ($isFirst): ?>
                                    <div class="absolute left-0 top-[14px] bottom-0 w-[2px] bg-[#DBEAFE]"></div>
                                <?php elseif ($isLast): ?>
                                    <div class="absolute left-0 top-0 h-[14px] w-[2px] bg-[#DBEAFE]"></div>
                                <?php else: ?>
                                    <div class="absolute left-0 top-0 bottom-0 w-[2px] bg-[#DBEAFE]"></div>
                                <?php endif; ?>
                            <?php endif; ?>

                            <!-- Dot Marker -->
                            <div class="absolute -left-[7px] top-1.5 w-4 h-4 rounded-full bg-white border-2 border-[#1E4E8C] group-hover/item:bg-[#1E4E8C] group-hover/item:scale-125 transition-all shadow-xs z-10"></div>

                            <!-- Date Badge -->
                            <div class="mb-1">
                                <span class="inline-block px-2.5 py-1 text-[11px] font-bold rounded-md bg-[#EFF6FF] text-[#1E4E8C] border border-[#DBEAFE]">
                                    <?= htmlspecialchars($item['date']) ?>
                                </span>
                            </div>

                            <!-- Event Title & Description -->
                            <h4 class="font-heading font-bold text-sm text-[#0B192C] leading-snug group-hover/item:text-[#1E4E8C] transition-colors">
                                <?= htmlspecialchars($item['title']) ?>
                            </h4>
                            <p class="text-xs text-[#64748B] mt-1 leading-relaxed">
                                <?= htmlspecialchars($item['desc']) ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

