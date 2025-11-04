<div class="p-4">
    <h1 class="h4 fw-bold mb-4">
        Bem-vindo, {{ $usuario->nome ?? 'Usuário' }}
    </h1>

    <div class="d-flex gap-3">
        <a href="{{ route('produtos') }}" class="btn btn-success">
            Cadastro de Produtos
        </a>

        <a href="{{ route('estoque') }}" class="btn btn-warning text-white">
            Gestão de Estoque
        </a>

        <button wire:click="logout" class="btn btn-danger">
            Logout
        </button>
    </div>
</div>
