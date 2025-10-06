<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<header class="fixed top-0 bg-white w-full shadow-md p-4">
    <div class="flex justify-between items-center md:container md:mx-auto">
        <h1 class="font-bold text-lg">PROGRAM KASIR</h1>
        <button onclick="document.getElementById('sidebar').classList.toggle('hidden')" class="md:hidden">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>
</header>
<?= $this->endSection() ?>