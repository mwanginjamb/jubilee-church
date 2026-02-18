<?php

/** @var yii\web\View $this */

$this->title = 'JOC Ministries';
?>
<div class="site-index">

    <!-- Page Heading Section -->
    <section class="px-4 md:px-10 lg:px-40 py-12 flex justify-center">
        <div class="max-w-[1200px] w-full">
            <div class="flex flex-col md:flex-row flex-wrap justify-between items-end gap-6">
                <div class="flex min-w-[280px] flex-col gap-3">
                    <h1
                        class="text-[#111318] dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                        Our Sanctuaries &amp; Centers</h1>
                    <p class="text-[#616f89] dark:text-gray-400 text-lg font-normal leading-normal max-w-xl">
                        Discover a home near you. Our doors are open in communities across Kenya, welcoming you
                        into our vibrant family of faith.
                    </p>
                </div>
                <button
                    class="flex min-w-[140px] cursor-pointer items-center justify-center gap-2 rounded-lg h-12 px-6 bg-primary/10 dark:bg-primary/20 text-primary text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/20 transition-colors">
                    <span class="material-symbols-outlined text-lg">map</span>
                    <span>View on Map</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Location Gallery Grid -->
    <section class="px-4 md:px-10 lg:px-40 pb-20 flex justify-center">
        <div class="max-w-[1200px] w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Nairobi Sanctuary Card -->
                <div
                    class="group relative overflow-hidden rounded-xl bg-white dark:bg-gray-900 shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="aspect-[16/10] bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        data-alt="Modern urban church building in Nairobi sunset"
                        style='background-image: linear-gradient(to bottom, transparent 40%, rgba(0,0,0,0.8) 100%), url("<?= \Yii::getAlias('@web') ?>/images/branches/thika.jpeg");'>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-white text-2xl md:text-3xl font-bold mb-4">HQ Sanctuary - Thika</h3>
                        <div class="flex gap-3">
                            <button
                                class="flex-1 flex items-center justify-center gap-2 rounded-lg h-11 bg-primary text-white text-sm font-bold hover:bg-primary/90 transition-colors">
                                <span class="material-symbols-outlined text-base">directions</span>
                                <span>Get Directions</span>
                            </button>
                            <button
                                class="flex-1 flex items-center justify-center gap-2 rounded-lg h-11 bg-white/20 backdrop-blur-md text-white text-sm font-bold border border-white/30 hover:bg-white/30 transition-colors">
                                <span>View Details</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Thika Sanctuary Card -->
                <div
                    class="group relative overflow-hidden rounded-xl bg-white dark:bg-gray-900 shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="aspect-[16/10] bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        data-alt="Peaceful sanctuary interior with natural light"
                        style='background-image: linear-gradient(to bottom, transparent 40%, rgba(0,0,0,0.8) 100%), url("<?= \Yii::getAlias('@web') ?>/images/branches/kibute.jpeg");'>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-white text-2xl md:text-3xl font-bold mb-4">Kibute Sanctuary</h3>
                        <div class="flex gap-3">
                            <button
                                class="flex-1 flex items-center justify-center gap-2 rounded-lg h-11 bg-primary text-white text-sm font-bold hover:bg-primary/90 transition-colors">
                                <span class="material-symbols-outlined text-base">directions</span>
                                <span>Get Directions</span>
                            </button>
                            <button
                                class="flex-1 flex items-center justify-center gap-2 rounded-lg h-11 bg-white/20 backdrop-blur-md text-white text-sm font-bold border border-white/30 hover:bg-white/30 transition-colors">
                                <span>View Details</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Busia Sanctuary Card -->
                <div
                    class="group relative overflow-hidden rounded-xl bg-white dark:bg-gray-900 shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="aspect-[16/10] bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        data-alt="Community center building with lush garden"
                        style='background-image: linear-gradient(to bottom, transparent 40%, rgba(0,0,0,0.8) 100%), url("<?= \Yii::getAlias('@web') ?>/images/branches/laare.jpeg");'>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-white text-2xl md:text-3xl font-bold mb-4">Laare Sanctuary</h3>
                        <div class="flex gap-3">
                            <button
                                class="flex-1 flex items-center justify-center gap-2 rounded-lg h-11 bg-primary text-white text-sm font-bold hover:bg-primary/90 transition-colors">
                                <span class="material-symbols-outlined text-base">directions</span>
                                <span>Get Directions</span>
                            </button>
                            <button
                                class="flex-1 flex items-center justify-center gap-2 rounded-lg h-11 bg-white/20 backdrop-blur-md text-white text-sm font-bold border border-white/30 hover:bg-white/30 transition-colors">
                                <span>View Details</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Machakos Sanctuary Card -->
                <div
                    class="group relative overflow-hidden rounded-xl bg-white dark:bg-gray-900 shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="aspect-[16/10] bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        data-alt="Modern church architectural facade during daytime"
                        style='background-image: linear-gradient(to bottom, transparent 40%, rgba(0,0,0,0.8) 100%), url("<?= \Yii::getAlias('@web') ?>/images/branches/machakos.jpeg");'>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-white text-2xl md:text-3xl font-bold mb-4">Machakos Sanctuary</h3>
                        <div class="flex gap-3">
                            <button
                                class="flex-1 flex items-center justify-center gap-2 rounded-lg h-11 bg-primary text-white text-sm font-bold hover:bg-primary/90 transition-colors">
                                <span class="material-symbols-outlined text-base">directions</span>
                                <span>Get Directions</span>
                            </button>
                            <button
                                class="flex-1 flex items-center justify-center gap-2 rounded-lg h-11 bg-white/20 backdrop-blur-md text-white text-sm font-bold border border-white/30 hover:bg-white/30 transition-colors">
                                <span>View Details</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section: Service Times -->
    <section class="bg-primary/5 dark:bg-gray-900/50 border-t border-gray-100 dark:border-gray-800">
        <div class="px-4 md:px-10 lg:px-40 py-20 flex justify-center">
            <div class="max-w-[800px] w-full text-center flex flex-col items-center gap-8">
                <div class="flex flex-col gap-4">
                    <h2 class="text-[#111318] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                        Join Us This Sunday
                    </h2>
                    <p class="text-[#616f89] dark:text-gray-400 text-lg font-normal leading-normal">
                        Experience a life-changing service at any of our locations. We have dedicated programs
                        for children, youth, and adults.
                    </p>
                </div>
                <div class="flex flex-wrap gap-4 justify-center w-full max-w-md">
                    <button
                        class="flex-1 min-w-[180px] h-14 cursor-pointer items-center justify-center rounded-lg bg-primary text-white text-base font-bold tracking-[0.015em] hover:shadow-lg hover:opacity-95 transition-all">
                        <span>Service Times</span>
                    </button>
                    <button
                        class="flex-1 min-w-[180px] h-14 cursor-pointer items-center justify-center rounded-lg bg-white dark:bg-gray-800 text-[#111318] dark:text-white border border-gray-200 dark:border-gray-700 text-base font-bold tracking-[0.015em] hover:bg-gray-50 transition-all">
                        <span>Plan Your Visit</span>
                    </button>
                </div>
            </div>
        </div>
    </section>


</div>