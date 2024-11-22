<!-- Login new -->
<div class=" min-h-min justify-normal">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left px-4">
      <h1 class="text-5xl font-bold">Faça login agora!</h1>
      <p class="py-6">
        Faça seu login e aproveite o melhor da leitura! Aqui você pode marcar seus livros favoritos, explorar sinopses detalhadas por gênero, e encontrar obras dos seus autores preferidos. Tudo isso em um só lugar, para tornar sua experiência literária incrível!

      </p>
    </div>

    <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">

      <form class="card-body" method="post">

        <div class="form-control">
          <?php if ($validacoes = flash()->get('validacoes_login')): ?>
            <div class="bg-red-900 px-4 py-2 rounded-md text-red-400 font-semibold border-red-800 border-2">
              <ul>
                <li>Deu ruim!!</li>
                <?php foreach ($validacoes as $validacao): ?>
                  <li><?= $validacao ?></li>
                <?php endforeach; ?>
              </ul>

            </div>
          <?php endif; ?>
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input type="email" placeholder="email" class="input input-bordered" name="email" />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Senha</span>
          </label>
          <input type="password" placeholder="password" class="input input-bordered" name="senha" />
          <label class="label">
            <a href="#" class="label-text-alt link link-hover">Esqueceu sua senha?</a>
          </label>
        </div>
        <div class="form-control mt-6">
          <button class="btn btn-primary" type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>