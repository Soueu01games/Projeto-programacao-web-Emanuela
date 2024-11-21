<b>Banco de Dados de uma Clínica:</b></br>
Projeto para a disciplina Programação Web na faculdade.
Para funcionar é necessário ter o Bootstrap instalado na mesma pasta com os arquivos como visto na imagem a seguir:


![image](https://github.com/user-attachments/assets/ac686e77-376c-4b21-9bce-5f3cb6f6cbb5)


<b>Diagrama de classes</b>
```mermaid
classDiagram
    class consulta {
        + Integer id_consulta
        + Integer paciente_id_paciente
        + Integer medico_id_medico
        + Date data_consulta
        + Time hora_consulta
        + Text descricao_consulta
    }

    class medico {
        + Integer id_medico
        + String nome_medico
        + String crm_medico
        + String especialidade_medico
    }

    class paciente {
        + Integer id_paciente
        + String nome_paciente
        + String cpf_paciente
        + Date data_nasc_paciente
        + Char sexo_paciente
        + String fone_paciente
        + String email_paciente
        + String endereco_paciente
    }

    consulta "1" *-- "1" medico : medico_id_medico
    consulta "1" *-- "1" paciente : paciente_id_paciente


```
<b>Dependências:</b></br>
<b>Bootstrap</b>- use o link abaixo ou pesquise no seu navegador-
https://getbootstrap.com .</br>
<b>SQL</b> feito pelo <b>DBDesigner</b>.

<b>Atenção:</b></br>
Para usar o projeto, lembre-se de alterar o diretório no começo dos códigos e verifique o nome colocado nas tabelas.

<b>Aula-1:</b></br>
O objetivo desse projeto é sobre cadastro de pacientes, médicos e consultas, usando banco de dados, a matéria que estou aprendendo na disciplina. Vou atualizar conforme o professor for expandindo o conteúdo 😀👍.

<b>Aula-2:</b></br>
Adicionei os cadastros por meio de formulário e a integração com o banco de dados é feito pelo config.php e "salvar_x.php", está dando erro no cadastro do médico então vou tentar arrumar antes de fazer o do paciente. O da clínica é mais complexo então fica para depois.

<b>Update:</b></br>
Consegui arrumar os erros e está aparentemente tudo funcionando na parte de paciente e médico. A da clínica não dá para fazer ainda pois usa as keys das outras 2 então é mais complexo.

<b>Aula-3:</b></br>
Adicionai as partes "listar paciente" e "listar médico", com uma lista dos dados cadastrados. Adicionei nas seções "salvar paciente e salvar médico" um pop-up que diz que o cadastro foi bem sucedido ou não, e redireciona o usuário a "Listar". As abas de "consulta" ainda não foram implementadas.

<b>Aula-4:</b></br>
Adicionei botões de Editar e Excluir nas listas de Médicos e Pacientes (listar), que redirecionam para as páginas de ação (editar e salvar). Fiz o código das abas de editar baseado nas de cadastrar e adicionei em "salvar" os case de editar e excluir. Ainda não vi chaves estrangeiras para poder fazer o código de Consultas, ainda vai demorar um pouco.

<b>Aula-5:</b></br>
Adicionei o CRUD de consulta e depois de vários erros fiz funcionar. O problema nem era na chave estrangeira e sim na conexão, precisei botar um include em quase tudo. Agora vou começar a fazer a estilização do site e adicionar 1 ou 2 tabelas a mais para entregar o desafio, já que a parte que o professor explicou acabou e agora a gente tem que praticar mais. Também padronizei a tabela pois estava confuso manter a versão daqui e do google drive e a do pc de casa e do pc da faculdade então renomeei tudo igual , sem acento, como deveria ser desde o começo e sincronizei o repositório no VS Code então só vou atualizar o README pelo github pois o resto eu altero localmento e commito depois.

<b>Finalização</b></br>
Vou deisar esse CRUD aqui como um exemplo para projetos futuros e vou começar a modificar o projeto no repositório - https://github.com/Soueu01games/Exo-Pets/tree/main </br>
Esse link é o projeto avançado e se tudo der certo vai ter css também.

</br>Última atualização 21/11/2024
