<div class="d-flex flex-column align-items-center justify-content-center vh-100">
    <h1 class="mb-4 fw-bold">Login - Moda Express</h1>

    @if (session('erro'))
        <p class="text-danger mb-2">{{ session('erro') }}</p>
    @endif

    <input type="email" wire:model="email" placeholder="Email" class="form-control mb-2 w-50">
    <input type="password" wire:model="senha" placeholder="Senha" class="form-control mb-3 w-50">

    <button wire:click="autenticar" class="btn btn-primary">Entrar</button>
</div>
