<?php

/** @var yii\web\View $this */

$this->title = 'JOC Ministries';
?>
<div class="site-index">


    <main class="flex flex-col items-center">
        <!-- Hero Heading -->
        <div class="w-full max-w-[1200px] mt-12 mb-8">
            <div class="flex flex-wrap justify-between gap-3 p-4">
                <div class="flex min-w-72 flex-col gap-3">
                    <p class="text-4xl font-black leading-tight tracking-[-0.033em] text-[#111318] dark:text-white">
                        Mission &amp; Vision Gallery</p>
                    <p class="text-[#616f89] dark:text-gray-400 text-lg font-normal leading-normal">Impacting today,
                        building for eternity through faith and action.</p>
                </div>
            </div>
        </div>
        <!-- Present Mission Section -->
        <div class="w-full max-w-[1200px] mb-20 px-4">
            <div class="flex items-center gap-3 mb-6">
                <span class="material-symbols-outlined text-primary">auto_awesome</span>
                <h2 class="text-[28px] font-extrabold leading-tight tracking-[-0.015em]">Our Present Mission</h2>
            </div>
            <!-- Custom Masonry-style Grid -->
            <div class="masonry-grid">
                <!-- Church Planting -->
                <div class="masonry-tall relative group overflow-hidden rounded-xl bg-gray-200"
                    data-alt="Modern church interior with congregation gathered in prayer" style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.1) 50%), url("<?= \Yii::getAlias('@web') ?>/images/church-planting.JPG"); background-size: cover; background-position:
                    center;'>
                    <div class="absolute bottom-0 left-0 p-6 text-white w-full">
                        <span
                            class="text-xs uppercase tracking-widest font-bold text-primary mb-2 block">Foundation</span>
                        <h3 class="text-2xl font-bold">Church Planting</h3>
                        <p class="text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 mt-2">
                            Spreading the word through community-centered fellowships.</p>
                    </div>
                </div>
                <!-- Children Ministry -->
                <div class="relative group overflow-hidden rounded-xl bg-gray-200"
                    data-alt="Children laughing and learning together in a bright classroom"
                    style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.1) 50%), url("<?= \Yii::getAlias('@web') ?>/images/children2.jpeg"); background-size: cover; background-position: center;'>
                    <div class="absolute bottom-0 left-0 p-6 text-white w-full">
                        <h3 class="text-xl font-bold">Children Ministry</h3>
                        <p class="text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Nurturing the next generation in faith.</p>
                    </div>
                </div>
                <!-- Youth Ministry -->
                <div class="relative group overflow-hidden rounded-xl bg-gray-200"
                    data-alt="Group of teenagers engaged in an outdoor team activity"
                    style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.1) 50%), url("<?= \Yii::getAlias('@web') ?>/images/youth_green.jpeg"); background-size: cover; background-position: center;'>
                    <div class="absolute bottom-0 left-0 p-6 text-white w-full">
                        <h3 class="text-xl font-bold">Youth Ministry</h3>
                        <p class="text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Empowering young adults to lead with purpose.</p>
                    </div>
                </div>
                <!-- Community Outreach -->
                <div class="masonry-tall relative group overflow-hidden rounded-xl bg-gray-200"
                    data-alt="Volunteers distributing food and supplies to people in need"
                    style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.1) 50%), url("<?= \Yii::getAlias('@web') ?>/images/outreach.jpeg"); background-size: cover; background-position: center;'>
                    <div class="absolute bottom-0 left-0 p-6 text-white w-full">
                        <span class="text-xs uppercase tracking-widest font-bold text-primary mb-2 block">Action</span>
                        <h3 class="text-2xl font-bold">Community Outreach.</h3>
                        <p class="text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 mt-2">
                            Serving the physical and spiritual needs of our city.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Future Vision Section -->
        <div class="w-full bg-white dark:bg-background-dark/50 py-20 flex justify-center">
            <div class="w-full max-w-[1200px] px-4">
                <div class="flex flex-col items-center text-center mb-16">
                    <span
                        class="px-4 py-1 bg-primary/10 text-primary rounded-full text-sm font-bold mb-4 uppercase tracking-widest">The
                        Road Ahead</span>
                    <h2
                        class="text-[#111318] dark:text-white text-4xl font-black leading-tight tracking-[-0.015em] mb-4">
                        Building Our Future</h2>
                    <div class="w-20 h-1.5 bg-crimson rounded-full mb-6"></div>
                    <p class="max-w-2xl text-[#616f89] dark:text-gray-400 text-lg">Our vision extends beyond today.
                        We are committed to establishing sustainable pillars of hope and education for the
                        generations to come.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Vision Item 1: Children's Home -->
                    <div
                        class="flex flex-col bg-white dark:bg-background-dark border border-gray-100 dark:border-gray-800 rounded-2xl overflow-hidden shadow-xl shadow-gray-200/50 dark:shadow-none hover:transform hover:-translate-y-2 transition-all duration-300">
                        <div class="h-64 bg-cover bg-center"
                            data-alt="Architectural concept of a warm, wooden-framed modern residential home"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBvG3VSggA2eja1vXnCkvgEBKhdFulIXKhZ7t-VD2Z0hOB4UaJrzmrCmRt8Mapz7IYoFhfz0sQOhDfNrobaa6oqGOGNBPRkXTfPZ3_goiNKn58NC9f2JXlo9H3-srGFex8wt9_Fc79vGkpyjN1WQs_7vJkheEr3eeNEfaHQzty5UDYP7LLzGH2Rk6N98lPJWm7jxM4zpAnkT_4K4w5ytkhEivBb__juf7TPW3UR3SAHZ1B8Y8JgXWYL6od5UQeOjTZFzfQZX4PUp5Y");'>
                        </div>
                        <div class="p-8 flex flex-col grow">
                            <h3 class="text-2xl font-bold mb-4">Children's Home</h3>
                            <p class="text-[#616f89] dark:text-gray-400 mb-8 grow leading-relaxed">A safe haven
                                providing shelter, education, and spiritual guidance for displaced children in our
                                region.</p>
                            <button
                                class="w-full bg-crimson hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-sm">favorite</span>
                                Support Our Vision
                            </button>
                        </div>
                    </div>
                    <!-- Vision Item 2: Bible College -->
                    <div
                        class="flex flex-col bg-white dark:bg-background-dark border border-gray-100 dark:border-gray-800 rounded-2xl overflow-hidden shadow-xl shadow-gray-200/50 dark:shadow-none hover:transform hover:-translate-y-2 transition-all duration-300">
                        <div class="h-64 bg-cover bg-center"
                            data-alt="Grand library interior with books and large windows reflecting sunlight"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDYjVjH8woSjxsSrL02Lv0X9R1jxc0JW3a-BJhgsrTXG9xPyQ875xu_P0NI3G5dfvv0ed6msshvcB52dla8OcWlOXXA0Q9Gd0okY9TG_VqN-6U-iR5Za_pcPlGl8w0U8Jie28zYSjJWw9HRE1ppZW9up2A5Ye8W_KTUKkj5tXp_7rBhjV2j33W6R5Wk8htsoXx643PjUNDM4Fni8kJhe2wJg0T1wfp_y4rbrBdpdZ-z0DHvYbwxWZYkQ6re1NSRgyhsQZsv1d08RMI");'>
                        </div>
                        <div class="p-8 flex flex-col grow">
                            <h3 class="text-2xl font-bold mb-4">Bible College</h3>
                            <p class="text-[#616f89] dark:text-gray-400 mb-8 grow leading-relaxed">Equipping the
                                next generation of leaders with profound theological knowledge and practical
                                ministry skills.</p>
                            <button
                                class="w-full bg-crimson hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-sm">school</span>
                                Support Our Vision
                            </button>
                        </div>
                    </div>
                    <!-- Vision Item 3: Prayer Center -->
                    <div
                        class="flex flex-col bg-white dark:bg-background-dark border border-gray-100 dark:border-gray-800 rounded-2xl overflow-hidden shadow-xl shadow-gray-200/50 dark:shadow-none hover:transform hover:-translate-y-2 transition-all duration-300">
                        <div class="h-64 bg-cover bg-center"
                            data-alt="Minimalist, serene prayer room with soft natural lighting and neutral tones"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDSvJDQMtdeUzb_877wlD86MVjiZYI2cdFLTb9PN0Q7ELK4UuztwR6eLLJFNPEYNhO595t97TgzmKAYNHNypm6-0jnoQqur3ABFZyR_5wLw6gG9vJSI6CWj0YwNbq4rJV7khN_B0m8TQmS4lcgBCBOVKibbvQURSTEB8xbxHbfdJAKWMRc74aYGh0-j0XazeWlylNle_xSkgbb_57v1QCRbqRkEtdltN2adYxSfdNLTt9kVKSZumftJ0h7B8gYTWdNaDNY9GA1XPTY");'>
                        </div>
                        <div class="p-8 flex flex-col grow">
                            <h3 class="text-2xl font-bold mb-4">Prayer Center</h3>
                            <p class="text-[#616f89] dark:text-gray-400 mb-8 grow leading-relaxed">A 24/7 sanctuary
                                dedicated to intercession, reflection, and seeking the presence of God for our
                                community.</p>
                            <button
                                class="w-full bg-crimson hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-sm">vibration</span>
                                Support Our Vision
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer CTA -->
        <div class="w-full max-w-[1200px] px-4 py-20">
            <div
                class="bg-primary rounded-3xl p-12 flex flex-col md:flex-row items-center justify-between text-white gap-8 overflow-hidden relative">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -mr-32 -mt-32"></div>
                <div class="relative z-10">
                    <h2 class="text-3xl font-bold mb-2">Be part of the legacy</h2>
                    <p class="text-white/80 text-lg">Your support helps us turn these visions into reality.</p>
                </div>
                <div class="flex flex-wrap gap-4 relative z-10">
                    <button
                        class="bg-white text-primary px-8 py-4 rounded-xl font-bold hover:bg-gray-100 transition-colors">Partner
                        With Us</button>
                    <button
                        class="bg-crimson text-white px-8 py-4 rounded-xl font-bold hover:bg-red-700 transition-colors">One-time
                        Donation</button>
                </div>
            </div>
        </div>
    </main>


</div>