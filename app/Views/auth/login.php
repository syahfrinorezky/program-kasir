<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="min-h-screen flex items-center justify-center">
    <div class="w-5/6 md:w-1/4 bg-white p-6 rounded-md shadow-md border border-gray-300">
        <h1 class="text-xl font-bold font-sans text-center uppercase">Masuk</h1>
        <div class="mt-3">
            <?php if (null !== session()->getFlashdata('success')) : ?>
                <div class="bg-green-100 border border-green-400 text-green-700 p-2 rounded-md text-sm flex items-center space-x-1">
                    <i class="fas fa-check-circle"></i>
                    <span><?= session()->getFlashdata('success') ?></span>
                </div>
            <?php endif; ?>
        </div>
        <?= form_open('/login') ?>
        <div class="mt-5 w-full flex flex-col gap-y-3">
            <div class="flex flex-col gap-y-1">
                <label for="username" class="text-neutral-700 inline-flex space-x-1 items-center"><i class="fas fa-user"></i> <span>Username</span></label>
                <input type="text" id="username" name="username" class="text-sm border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-neutral-300" placeholder="Masukkan username">
            </div>
            <div x-data="{ showPassword: false }" class="flex flex-col gap-y-1">
                <label for="password" class="text-neutral-700 inline-flex space-x-1 items-center"><i class="fas fa-lock"></i> <span>Password</span></label>
                <div class="flex space-x-1">
                    <input :type="showPassword ? 'text' : 'password'" id="password" name="password"
                        class="w-full text-sm border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-neutral-300"
                        placeholder="Masukkan password">
                    <button type="button" @click="showPassword = !showPassword" class="aspect-square bg-neutral-800 rounded-md p-2">
                        <i class="fas fa-eye text-white" x-show="!showPassword"></i>
                        <i class="fas fa-eye-slash text-white" x-show="showPassword"></i>
                    </button>
                </div>
            </div>
            <p class="mt-3 text-sm text-gray-500 text-center">Anda belum memiliki akun? <a class="text-blue-500 hover:underline hover:text-blue-700" href="<?= base_url('register') ?>">Daftar</a></p>
            <div class="relative flex items-center w-full">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="mx-4 text-sm text-gray-400">atau</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>
            <p class="mt-1 text-sm text-gray-500 text-center">Lupa password? <a class="text-blue-500 hover:underline hover:text-blue-700" href="<?= base_url('forgot-password') ?>">Reset Password</a></p>

            <button type="submit" class="bg-neutral-800 text-white rounded-md p-2 mt-5 uppercase font-bold hover:bg-neutral-700 md:cursor-pointer">Masuk</button>
        </div>
        <?= form_close() ?>
    </div>
</div>
<?= $this->endSection() ?>