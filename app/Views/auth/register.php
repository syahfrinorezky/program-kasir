<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
Register
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="min-h-screen flex items-center justify-center">
    <div class="w-5/6 md:w-1/4 bg-white p-6 rounded-md shadow-md border border-gray-300">
        <h1 class="text-xl font-bold font-sans text-center uppercase">Daftar Akun</h1>
        <p class="mt-1 text-sm text-gray-500 text-center">Anda sudah memiliki akun? <a class="text-blue-500 hover:underline hover:text-blue-700" href="<?= base_url('login') ?>">Login</a></p>
        <?= form_open('/register') ?>
        <div class="mt-5 w-full flex flex-col gap-y-3">
            <div class="flex flex-col gap-y-1">
                <label for="nama_lengkap" class="text-neutral-700 inline-flex space-x-1 items-center"><i class="fas fa-id-card"></i> <span>Nama Lengkap</span></label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?= old('nama_lengkap') ?>" class="text-sm border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-neutral-300" placeholder="Masukkan nama lengkap">
                <?php if (isset(session()->getFlashdata('errors')['nama_lengkap'])) : ?>
                    <div class="text-red-500 text-sm mt-1"><?= session()->getFlashdata('errors')['nama_lengkap'] ?></div>
                <?php endif; ?>
            </div>

            <div class="flex flex-col gap-y-1">
                <label for="username" class="text-neutral-700 inline-flex space-x-1 items-center"><i class="fas fa-user"></i> <span>Username</span></label>
                <input type="text" id="username" name="username" value="<?= old('username') ?>" class="text-sm border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-neutral-300" placeholder="Masukkan username">
                <?php if (isset(session()->getFlashdata('errors')['username'])) : ?>
                    <div class="text-red-500 text-sm mt-1"><?= session()->getFlashdata('errors')['username'] ?></div>
                <?php endif; ?>
            </div>

            <div x-data="{ showPassword: false }" class="flex flex-col gap-y-1">
                <label for="password" class="text-neutral-700 inline-flex space-x-1 items-center"><i class="fas fa-lock"></i> <span>Password</span></label>
                <div class="flex space-x-1">
                    <input :type="showPassword ? 'text' : 'password'" id="password" name="password" value="<?= old('password') ?>"
                        class="text-sm w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-neutral-300"
                        placeholder="Masukkan password">
                    <button type="button" @click="showPassword = !showPassword" class="aspect-square bg-neutral-800 rounded-md p-2">
                        <i class="fas fa-eye text-white" x-show="!showPassword"></i>
                        <i class="fas fa-eye-slash text-white" x-show="showPassword"></i>
                    </button>
                </div>
                <?php if (isset(session()->getFlashdata('errors')['password'])) : ?>
                    <div class="text-red-500 text-sm mt-1"><?= session()->getFlashdata('errors')['password'] ?></div>
                <?php endif; ?>
            </div>


            <button type="submit" class="bg-neutral-800 text-white rounded-md p-2 mt-5 uppercase font-bold hover:bg-neutral-700 md:cursor-pointer">Daftar</button>
        </div>
        <?= form_close() ?>
    </div>
</div>
<?= $this->endSection() ?>