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
                        style='background-image: linear-gradient(to bottom, transparent 40%, rgba(0,0,0,0.8) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBwMBIfXIV47dpZ9A_1X131jz7ekTkZRjMrWo7HnTx0SqbQDAyNYzlFjGjZRB1khDDGm1HgrecicEGtDaIu0zfgl8W42zPoMgnhWrKxOtYmH4gPP5uUao-uw5o4oJETTa1tulFMqEmBNTikkGiFfYj52mchrCoYfH3GinfKNW81GELETV5uHTJRxWDcFD-7Jce5GphWrk3x3fob0AqCbn-udeeHqnt6v2zKwpc4eSYnW8BdKTP2XJLBJZElLbHJwwYAe_bIdgy-M8Q");'>
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
                        style='background-image: linear-gradient(to bottom, transparent 40%, rgba(0,0,0,0.8) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuChkATgUgip_1k5qkNOTxNCMWpG9AMF4LhqWjDjyZekD76q2H2KdjguPx81UTnnd8F9WlKObCf48FAJ-zR7-P-cAXYLQXiVQziDAXk4nGgCP5B4D45pQmOdmhTW5ZeyiSNtnu4CnnjfycaL0MXpOiAUJqmM9wWahwMerr3cqefVOPfquW2uA14noV-QHtMNWZ8cp5Sz3tClux6z54a41sBhKSRP3D3GHQgDMn9d2nkkXDg_q_HVXJYosm3Ja-aRUBv3T7rCagvAmDo");'>
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
                        style='background-image: linear-gradient(to bottom, transparent 40%, rgba(0,0,0,0.8) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBFRyWeCybJ8HUbFtxBokkLa8TjE3BNicy3QEaIF_uky-CeFUVbebXNm70zbQC7whgPC2uqi0oUCFob-BD0r7eNhkYAbnIJp8jioH2var0V9CwF_ckDsXceTx0yfKwqkydFtIk2qZC2dYwhVj0UuThu-LcDjcNThdLNCM9c5uBEeNiyzdDid4JwxbwgONskH0BKHKMnwLA-C1BL3vgB_eLblVQwgylneBvt0o7rQ99-Mr_pZxYUJW0h2oO69Exr_kREbJD63bqiskE");'>
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
                        style='background-image: linear-gradient(to bottom, transparent 40%, rgba(0,0,0,0.8) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDVbJQhQb-S3Upf_5zDDDwKuGc7icPGrymH4Qr49OBEF6y3h5n2YtVP2VBxW3pojcYYof3qpcuBh9lN3qKIwLMBREWKsNgRyk3z-oVazk90uiVN29gfVoKA3iO0ARyzXx1mQh0Dq22bIJtb9ix_tGuHOqdm3cQa-YusEfMTK2_BH_WH0niN3vVZhw_rIZnBPeR6rUksPjU4hP9ojdIEMTdEnd8KayLTxr9nX-x4RoSvDjGZ6c8Cc2Ih_U_f84Qc_mf93fuiAZnqcn4");'>
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