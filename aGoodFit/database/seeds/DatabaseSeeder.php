<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //Criação dos niveis de usuario
      DB::table('tbNivelUsuario')->insert(array(
    		array(
    		'codNivelUsuario' => 1,
        'nomeNivelUsuario' => 'Moderador',
    		),
    		array(
          'codNivelUsuario' => 2,
          'nomeNivelUsuario' => 'Candidato',

    		),
    		array(
          'codNivelUsuario' => 3,
          'nomeNivelUsuario' => 'Empresa',

    		),
    		));

      //Criação do endereco da empresa
      DB::table('tbEndereco')->insert(array(
    		array(
    		'codEndereco' => 1,
        'cepEndereco' => '01538001',
        'logradouroEndereco' => 'Avenida Lins de Vasconcelos',
        'numeroEndereco' => '1222',
        'complementoEndereco' => ' ',
        'bairroEndereco' => 'Cambuci',
        'zonaEndereco' => 'Zona Central',
        'cidadeEndereco' => 'São Paulo',
        'estadoEndereco' => 'SP',
    		),
      ));

      //Criação de usuarios
      DB::table('tbUsuario')->insert(array(
        //uma empresa
    		array(
    		'codUsuario' => 1,
        'fotoUsuario' => 'perfil.png',
        'loginUsuario' => 'Education & Future',
        'password' => '$2y$10$UGYW4JK2i.8Jv1IQdHpZdu9hX.HwIXukFjpZxYcS5Y.KPEqciHNai',
        'email' =>'education@future.com.br',
        'codNivelUsuario' => 3,
        'codEndereco' => 1,
    		),
        //Um candidato
        array(
    		'codUsuario' => 2,
        'fotoUsuario' => 'perfil.png',
        'loginUsuario' => 'Adm',
        'password' => '$2y$10$Wrjg/tHTvKekdW5Qc/k4S.BrIJVVfWe0B1MoJ.EVarRbQMzkrw.Ii',
        'email' => 'admCandidato@exemple.com',
        'codNivelUsuario' => 2,
        'codEndereco' => null,
    		),
      ));
      //Criação de uma empresa
      DB::table('tbEmpresa')->insert(array(
    		array(
    		'codEmpresa' => 1,
        'razaoSocialEmpresa' => 'Education & Future',
        'nomeFantasiaEmpresa' => 'Education & Future',
        'cnpjEmpresa' => '76627089000182',
        'codUsuario' => 1,
    		),
    	));
      //Criacao de um Candidato
      DB::table('tbCandidato')->insert(array(
    		array(
    		'codCandidato' => 1,
        'nomeCandidato' => 'Administrador',
        'cpfCandidato' => '12345678901',
        'rgCandidato' => '123',
        'dataNascimentoCandidato' => '1998-05-22',
        'codUsuario' => 2,
    		),
    	));
      //Criacao dos tipos adicionais
      DB::table('tbTipoAdicional')->insert(array(
    		array(
    		'codTipoAdicional' => 1,
        'nomeTipoAdicional' => 'Habilidade',
        'escalonavelTipoAdicional' => 0,
    		),

        array(
    		'codTipoAdicional' => 2,
        'nomeTipoAdicional' => 'Escolaridade',
        'escalonavelTipoAdicional' => 1,
    		),

        array(
    		'codTipoAdicional' => 3,
        'nomeTipoAdicional' => 'Alfabetização',
        'escalonavelTipoAdicional' => 1,
    		),
    	));
      //Criacao dos adicionais
      DB::table('tbAdicional')->insert(array(
    		array(
    		'codAdicional' => 1,
        'imagemAdicional' => 'comunicativo.png',
        'nomeAdicional' => 'Comunicação',
        'grauAdicional' => 0,
        'codTipoAdicional' => 1,
    		),

        array(
    		'codAdicional' => 2,
        'imagemAdicional' => 'criativo.png',
        'nomeAdicional' => 'Criatividade',
        'grauAdicional' => 0,
        'codTipoAdicional' => 1,
    		),

        array(
    		'codAdicional' => 3,
        'imagemAdicional' => 'organizacao.png',
        'nomeAdicional' => 'Organização',
        'grauAdicional' => 0,
        'codTipoAdicional' => 1,
    		),

        array(
    		'codAdicional' => 4,
        'imagemAdicional' => 'relacionamento.png',
        'nomeAdicional' => 'Relacionamento',
        'grauAdicional' => 0,
        'codTipoAdicional' => 1,
    		),

        array(
    		'codAdicional' => 5,
        'imagemAdicional' => 'matematica.png',
        'nomeAdicional' => 'Números',
        'grauAdicional' => 0,
        'codTipoAdicional' => 1,
    		),

        array(
    		'codAdicional' => 6,
        'imagemAdicional' => 'escrita.png',
        'nomeAdicional' => 'Escrita',
        'grauAdicional' => 0,
        'codTipoAdicional' => 1,
    		),

        array(
    		'codAdicional' => 7,
        'imagemAdicional' => 'instrumento.png',
        'nomeAdicional' => 'Música',
        'grauAdicional' => 0,
        'codTipoAdicional' => 1,
    		),

        array(
    		'codAdicional' => 8,
        'imagemAdicional' => 'pintura.png',
        'nomeAdicional' => 'Artes',
        'grauAdicional' => 0,
        'codTipoAdicional' => 1,
    		),

        array(
    		'codAdicional' => 9,
        'imagemAdicional' => 'camera.png',
        'nomeAdicional' => 'Fotografia',
        'grauAdicional' => 0,
        'codTipoAdicional' => 1,
    		),

        array(
    		'codAdicional' => 10,
        'imagemAdicional' => 'baby.png',
        'nomeAdicional' => 'Crianças',
        'grauAdicional' => 0,
        'codTipoAdicional' => 1,
    		),

        array(
    		'codAdicional' => 11,
        'imagemAdicional' => 'inteligente.png',
        'nomeAdicional' => 'Raciocínio',
        'grauAdicional' => 0,
        'codTipoAdicional' => 1,
    		),

        array(
    		'codAdicional' => 12,
        'imagemAdicional' => 'html.png',
        'nomeAdicional' => 'Códigos',
        'grauAdicional' => 0,
        'codTipoAdicional' => 1,
    		),

        array(
    		'codAdicional' => 13,
        'imagemAdicional' => ' ',
        'nomeAdicional' => 'Ensino Fundamental Incompleto',
        'grauAdicional' => 10,
        'codTipoAdicional' => 2,
    		),

        array(
    		'codAdicional' => 14,
        'imagemAdicional' => ' ',
        'nomeAdicional' => 'Ensino Fundamental Completo',
        'grauAdicional' => 20,
        'codTipoAdicional' => 2,
    		),

        array(
    		'codAdicional' => 15,
        'imagemAdicional' => ' ',
        'nomeAdicional' => 'Ensino Médio Incompleto',
        'grauAdicional' => 30,
        'codTipoAdicional' => 2,
    		),

        array(
    		'codAdicional' => 16,
        'imagemAdicional' => ' ',
        'nomeAdicional' => 'Ensino Médio Completo',
        'grauAdicional' => 40,
        'codTipoAdicional' => 2,
    		),

        array(
    		'codAdicional' => 17,
        'imagemAdicional' => ' ',
        'nomeAdicional' => 'Ensino Superior Incompleto',
        'grauAdicional' => 50,
        'codTipoAdicional' => 2,
    		),

        array(
    		'codAdicional' => 18,
        'imagemAdicional' => ' ',
        'nomeAdicional' => 'Ensino Superior Completo',
        'grauAdicional' => 60,
        'codTipoAdicional' => 2,
    		),

        array(
    		'codAdicional' => 19,
        'imagemAdicional' => ' ',
        'nomeAdicional' => 'Alfabetizado',
        'grauAdicional' => 100,
        'codTipoAdicional' => 3,
    		),

        array(
    		'codAdicional' => 20,
        'imagemAdicional' => ' ',
        'nomeAdicional' => 'Semi-Analfabeto',
        'grauAdicional' => 50,
        'codTipoAdicional' => 3,
    		),

        array(
    		'codAdicional' => 21,
        'imagemAdicional' => ' ',
        'nomeAdicional' => 'Analfabeto',
        'grauAdicional' => 0,
        'codTipoAdicional' => 3,
    		),
    	));
      //Criacao das categoria
      DB::table('tbCategoria')->insert(array(
    		array(
    		'codCategoria' => 1,
        'imagemCategoria' => 'telemarketing.png',
        'nomeCategoria' => 'Atendimento',
    		),

        array(
    		'codCategoria' => 2,
        'imagemCategoria' => 'ti.png',
        'nomeCategoria' => 'TI',
    		),

        array(
    		'codCategoria' => 3,
        'imagemCategoria' => 'assistencia-tecnica.png',
        'nomeCategoria' => 'Assistência Técnica',
    		),

        array(
    		'codCategoria' => 4,
        'imagemCategoria' => 'livros.png',
        'nomeCategoria' => 'Educação',
    		),

        array(
    		'codCategoria' => 5,
        'imagemCategoria' => 'danca.png',
        'nomeCategoria' => 'Dança',
    		),

        array(
    		'codCategoria' => 6,
        'imagemCategoria' => 'alimentacao.png',
        'nomeCategoria' => 'Alimentação',
    		),

        array(
    		'codCategoria' => 7,
        'imagemCategoria' => 'artes.png',
        'nomeCategoria' => 'Artes',
    		),

        array(
    		'codCategoria' => 8,
        'imagemCategoria' => 'musica.png',
        'nomeCategoria' => 'Música',
    		),

        array(
    		'codCategoria' => 9,
        'imagemCategoria' => 'saude.png',
        'nomeCategoria' => 'Saúde',
    		),

        array(
    		'codCategoria' => 10,
        'imagemCategoria' => 'eventos.png',
        'nomeCategoria' => 'Eventos',
    		),

        array(
    		'codCategoria' => 11,
        'imagemCategoria' => 'obra.png',
        'nomeCategoria' => 'Construção',
    		),

        array(
    		'codCategoria' => 12,
        'imagemCategoria' => 'beleza.png',
        'nomeCategoria' => 'Beleza',
    		),

        array(
    		'codCategoria' => 13,
        'imagemCategoria' => 'esportes.png',
        'nomeCategoria' => 'Esportes',
    		),

        array(
    		'codCategoria' => 14,
        'imagemCategoria' => 'vendas.png',
        'nomeCategoria' => 'Vendas',
    		),
    	));
      //Criação da profissao
      DB::table('tbProfissao')->insert(array(
    		array(
    		'codProfissao' => 1,
        'nomeProfissao' => 'Professor de Matemática',
        'codCategoria' => 4,
    		),
    	));
      //Criação do regime de contratação
      DB::table('tbRegimeContratacao')->insert(array(
    		array(
    		'codRegimeContratacao' => 1,
        'nomeRegimeContratacao' => 'Empregado',
        'descricaoRegimeContratacao' => 'O empregado convencional é um efetivo da empresa e tem uma carteira assinada, com regime de trabalho gerenciado pela CLT. Isso significa que ele tem acesso a diversos direitos trabalhistas, como salário, contribuição para o INSS, FGTS, 13º salário e férias. É permitido fazer hora extra, se o contexto da empresa permitir, assim como pode receber verbas rescisórias no caso de desligamento. Por isso é importante conhecer as multas paraesseti pode contrato, caso os direitos não sejam aplicados corretamente conforme legislação. Esse tipo de profissional não tem obrigação de manter estudos junto com o trabalho, apesar de a empresa poder fornecer capacitações, se ela desejar. Seu maior papel é apresentar resultados com qualidade, eficiência e eficácia.',
    		),

        array(
    		'codRegimeContratacao' => 2,
        'nomeRegimeContratacao' => 'Trainee',
        'descricaoRegimeContratacao' => 'O trainee é um efetivo da empresa, tendo um salário acima da média e acesso aos direitos trabalhistas. É regulamentado pela CLT, sem um conjunto de regras específico para esse trabalho. Para o cargo de trainee não existe conceituação jurídica, trata-se de uma qualificação criada pela empresa. Juridicamente o trainee é um empregado e deve usufruir de todos os direitos gerados pela relação de emprego, como por exemplo: FGTS, 13º salário, férias, adicionais, entre outros. Esse programa se diferencia por fazer o profissional passar por várias funções (o chamado job rotation) para ele conhecer mais do negócio. Isso ocorre porque o objetivo do trainee é formar líderes para a corporação, sendo que dele também há uma cobrança maior por resultados. Além disso, há capacitações, viagens, treinamentos e até coaching. O programa de trainee dura de 1 a 2 anos e, depois, o colaborador permanece na empresa. Muitas vezes acontece de a área de formação da pessoa ser muito distinta do ramo de atuação. Não é exigido que o profissional esteja estudando, mas, em geral, o perfil contratado é de pessoas no fim da graduação ou recém-formados.',
    		),

        array(
    		'codRegimeContratacao' => 3,
        'nomeRegimeContratacao' => 'Jovem aprendiz',
        'descricaoRegimeContratacao' => 'O jovem aprendiz tem um vínculo empregatício regido pela CLT, mas em um contrato diferente. Além da exigência de ter entre 14 e 24 anos, ele só pode permanecer nesse trabalho por, no máximo, 2 anos e precisa estar matriculado em alguma instituição de ensino. Esse estudo pode ser uma escola, curso técnico ou outro tipo de formação. Ele tem direito a salário e há chance de efetivação na empresa, mas também é preciso mostrar resultados para a corporação. Também possui os direitos gerados pela relação de emprego como: FGTS, 13º salário, férias, adicionais, entre outros',
    		),

        array(
    		'codRegimeContratacao' => 4,
        'nomeRegimeContratacao' => 'Estagiário',
        'descricaoRegimeContratacao' => 'Esse tipo de trabalhador deve necessariamente estar vinculado a uma instituição de ensino. O tempo das atividades de estágio deve se adequar ao horário acadêmico, sendo de um período entre 4h e 6h. A regulamentação do estágio é específica, segundo a Lei nº 11.788/2008. O estagiário realiza trabalhos com o objetivo de aprendizagem, complementando o conteúdo teórico que obtém na faculdade ou escola. Assim, ele precisa trabalhar em conjunto com a supervisão, mas mostrar resultados não é a principal prioridade. Quanto à remuneração, se o estágio não é obrigatório pela grade curricular do curso, o estagiário recebe uma bolsa-auxílio e ajuda para transporte, além do seguro contra acidentes pessoais e férias. No estágio obrigatório, ele não tem direito a nenhum pagamento. Com relação à efetivação na empresa, é bom lembrar que o estagiário não tem garantia de entrar para o quadro de funcionários, apesar de a possibilidade existir.',
    		),
    	));

      DB::table('tbVaga')->insert(array(
    		array(
    		'codVaga' => 1,
        'descricaoVaga' => 'Irá ministrar aula, fazer planejamento, preencher relatórios, fazer provas e trabalhos, semanário e trabalhar com projetos.',
        'salarioVaga' => 2,
        'cargaHorariaVaga' => '44:00:00',
        'quantidadeVaga' => 5,
        'codEmpresa' => 1,
        'codProfissao' => 1,
        'codEndereco' => 1,
        'codRegimeContratacao' => 1,
    		),
    	));

      DB::table('tbRequisitoVaga')->insert(array(
    		array(
    		'codRequisitoVaga' => 1,
        'obrigatoriedadeRequisitoVaga' => 0,
        'codAdicional' => 1,
        'codVaga' => 1,
    		),

        array(
    		'codRequisitoVaga' => 2,
        'obrigatoriedadeRequisitoVaga' => 0,
        'codAdicional' => 6,
        'codVaga' => 1,
    		),

        array(
    		'codRequisitoVaga' => 3,
        'obrigatoriedadeRequisitoVaga' => 0,
        'codAdicional' => 11,
        'codVaga' => 1,
    		),

        array(
    		'codRequisitoVaga' => 4,
        'obrigatoriedadeRequisitoVaga' => 1,
        'codAdicional' => 10,
        'codVaga' => 1,
    		),
    	));
    }
}
