<?php


namespace App\Helpers;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class Helper
{




    public static function getCities(): array
    {



        $cities = [
            [
                "name" => "Aceguá"
            ],
            [
                "name" => "Água Santa"
            ],
            [
                "name" => "Agudo"
            ],
            [
                "name" => "Ajuricaba"
            ],
            [
                "name" => "Alecrim"
            ],
            [
                "name" => "Alegrete"
            ],
            [
                "name" => "Alegria"
            ],
            [
                "name" => "Almirante Tamandaré do Sul"
            ],
            [
                "name" => "Alpestre"
            ],
            [
                "name" => "Alto Alegre"
            ],
            [
                "name" => "Alto Feliz"
            ],
            [
                "name" => "Alvorada"
            ],
            [
                "name" => "Amaral Ferrador"
            ],
            [
                "name" => "Ametista do Sul"
            ],
            [
                "name" => "André da Rocha"
            ],
            [
                "name" => "Anta Gorda"
            ],
            [
                "name" => "Antônio Prado"
            ],
            [
                "name" => "Arambaré"
            ],
            [
                "name" => "Araricá"
            ],
            [
                "name" => "Aratiba"
            ],
            [
                "name" => "Arroio do Meio"
            ],
            [
                "name" => "Arroio do Sal"
            ],
            [
                "name" => "Arroio do Padre"
            ],
            [
                "name" => "Arroio dos Ratos"
            ],
            [
                "name" => "Arroio do Tigre"
            ],
            [
                "name" => "Arroio Grande"
            ],
            [
                "name" => "Arvorezinha"
            ],
            [
                "name" => "Augusto Pestana"
            ],
            [
                "name" => "Áurea"
            ],
            [
                "name" => "Bagé"
            ],
            [
                "name" => "Balneário Pinhal"
            ],
            [
                "name" => "Barão"
            ],
            [
                "name" => "Barão de Cotegipe"
            ],
            [
                "name" => "Barão do Triunfo"
            ],
            [
                "name" => "Barracão"
            ],
            [
                "name" => "Barra do Guarita"
            ],
            [
                "name" => "Barra do Quaraí"
            ],
            [
                "name" => "Barra do Ribeiro"
            ],
            [
                "name" => "Barra do Rio Azul"
            ],
            [
                "name" => "Barra Funda"
            ],
            [
                "name" => "Barros Cassal"
            ],
            [
                "name" => "Benjamin Constant do Sul"
            ],
            [
                "name" => "Bento Gonçalves"
            ],
            [
                "name" => "Boa Vista das Missões"
            ],
            [
                "name" => "Boa Vista do Buricá"
            ],
            [
                "name" => "Boa Vista do Cadeado"
            ],
            [
                "name" => "Boa Vista do Incra"
            ],
            [
                "name" => "Boa Vista do Sul"
            ],
            [
                "name" => "Bom Jesus"
            ],
            [
                "name" => "Bom Princípio"
            ],
            [
                "name" => "Bom Progresso"
            ],
            [
                "name" => "Bom Retiro do Sul"
            ],
            [
                "name" => "Boqueirão do Leão"
            ],
            [
                "name" => "Bossoroca"
            ],
            [
                "name" => "Bozano"
            ],
            [
                "name" => "Braga"
            ],
            [
                "name" => "Brochier"
            ],
            [
                "name" => "Butiá"
            ],
            [
                "name" => "Caçapava do Sul"
            ],
            [
                "name" => "Cacequi"
            ],
            [
                "name" => "Cachoeira do Sul"
            ],
            [
                "name" => "Cachoeirinha"
            ],
            [
                "name" => "Cacique Doble"
            ],
            [
                "name" => "Caibaté"
            ],
            [
                "name" => "Caiçara"
            ],
            [
                "name" => "Camaquã"
            ],
            [
                "name" => "Camargo"
            ],
            [
                "name" => "Cambará do Sul"
            ],
            [
                "name" => "Campestre da Serra"
            ],
            [
                "name" => "Campina das Missões"
            ],
            [
                "name" => "Campinas do Sul"
            ],
            [
                "name" => "Campo Bom"
            ],
            [
                "name" => "Campo Novo"
            ],
            [
                "name" => "Campos Borges"
            ],
            [
                "name" => "Candelária"
            ],
            [
                "name" => "Cândido Godói"
            ],
            [
                "name" => "Candiota"
            ],
            [
                "name" => "Canela"
            ],
            [
                "name" => "Canguçu"
            ],
            [
                "name" => "Canoas"
            ],
            [
                "name" => "Canudos do Vale"
            ],
            [
                "name" => "Capão Bonito do Sul"
            ],
            [
                "name" => "Capão da Canoa"
            ],
            [
                "name" => "Capão do Cipó"
            ],
            [
                "name" => "Capão do Leão"
            ],
            [
                "name" => "Capivari do Sul"
            ],
            [
                "name" => "Capela de Santana"
            ],
            [
                "name" => "Capitão"
            ],
            [
                "name" => "Carazinho"
            ],
            [
                "name" => "Caraá"
            ],
            [
                "name" => "Carlos Barbosa"
            ],
            [
                "name" => "Carlos Gomes"
            ],
            [
                "name" => "Casca"
            ],
            [
                "name" => "Caseiros"
            ],
            [
                "name" => "Catuípe"
            ],
            [
                "name" => "Caxias do Sul"
            ],
            [
                "name" => "Centenário"
            ],
            [
                "name" => "Cerrito"
            ],
            [
                "name" => "Cerro Branco"
            ],
            [
                "name" => "Cerro Grande"
            ],
            [
                "name" => "Cerro Grande do Sul"
            ],
            [
                "name" => "Cerro Largo"
            ],
            [
                "name" => "Chapada"
            ],
            [
                "name" => "Charqueadas"
            ],
            [
                "name" => "Charrua"
            ],
            [
                "name" => "Chiapetta"
            ],
            [
                "name" => "Chuí"
            ],
            [
                "name" => "Chuvisca"
            ],
            [
                "name" => "Cidreira"
            ],
            [
                "name" => "Ciríaco"
            ],
            [
                "name" => "Colinas"
            ],
            [
                "name" => "Colorado"
            ],
            [
                "name" => "Condor"
            ],
            [
                "name" => "Constantina"
            ],
            [
                "name" => "Coqueiro Baixo"
            ],
            [
                "name" => "Coqueiros do Sul"
            ],
            [
                "name" => "Coronel Barros"
            ],
            [
                "name" => "Coronel Bicaco"
            ],
            [
                "name" => "Coronel Pilar"
            ],
            [
                "name" => "Cotiporã"
            ],
            [
                "name" => "Coxilha"
            ],
            [
                "name" => "Crissiumal"
            ],
            [
                "name" => "Cristal"
            ],
            [
                "name" => "Cristal do Sul"
            ],
            [
                "name" => "Cruz Alta"
            ],
            [
                "name" => "Cruzaltense"
            ],
            [
                "name" => "Cruzeiro do Sul"
            ],
            [
                "name" => "David Canabarro"
            ],
            [
                "name" => "Derrubadas"
            ],
            [
                "name" => "Dezesseis de Novembro"
            ],
            [
                "name" => "Dilermando de Aguiar"
            ],
            [
                "name" => "Dois Irmãos"
            ],
            [
                "name" => "Dois Irmãos das Missões"
            ],
            [
                "name" => "Dois Lajeados"
            ],
            [
                "name" => "Dom Feliciano"
            ],
            [
                "name" => "Dom Pedro de Alcântara"
            ],
            [
                "name" => "Dom Pedrito"
            ],
            [
                "name" => "Dona Francisca"
            ],
            [
                "name" => "Doutor Maurício Cardoso"
            ],
            [
                "name" => "Doutor Ricardo"
            ],
            [
                "name" => "Eldorado do Sul"
            ],
            [
                "name" => "Encantado"
            ],
            [
                "name" => "Encruzilhada do Sul"
            ],
            [
                "name" => "Engenho Velho"
            ],
            [
                "name" => "Entre-Ijuís"
            ],
            [
                "name" => "Entre Rios do Sul"
            ],
            [
                "name" => "Erebango"
            ],
            [
                "name" => "Erechim"
            ],
            [
                "name" => "Ernestina"
            ],
            [
                "name" => "Herval"
            ],
            [
                "name" => "Erval Grande"
            ],
            [
                "name" => "Erval Seco"
            ],
            [
                "name" => "Esmeralda"
            ],
            [
                "name" => "Esperança do Sul"
            ],
            [
                "name" => "Espumoso"
            ],
            [
                "name" => "Estação"
            ],
            [
                "name" => "Estância Velha"
            ],
            [
                "name" => "Esteio"
            ],
            [
                "name" => "Estrela"
            ],
            [
                "name" => "Estrela Velha"
            ],
            [
                "name" => "Eugênio de Castro"
            ],
            [
                "name" => "Fagundes Varela"
            ],
            [
                "name" => "Farroupilha"
            ],
            [
                "name" => "Faxinal do Soturno"
            ],
            [
                "name" => "Faxinalzinho"
            ],
            [
                "name" => "Fazenda Vilanova"
            ],
            [
                "name" => "Feliz"
            ],
            [
                "name" => "Flores da Cunha"
            ],
            [
                "name" => "Floriano Peixoto"
            ],
            [
                "name" => "Fontoura Xavier"
            ],
            [
                "name" => "Formigueiro"
            ],
            [
                "name" => "Forquetinha"
            ],
            [
                "name" => "Fortaleza dos Valos"
            ],
            [
                "name" => "Frederico Westphalen"
            ],
            [
                "name" => "Garibaldi"
            ],
            [
                "name" => "Garruchos"
            ],
            [
                "name" => "Gaurama"
            ],
            [
                "name" => "General Câmara"
            ],
            [
                "name" => "Gentil"
            ],
            [
                "name" => "Getúlio Vargas"
            ],
            [
                "name" => "Giruá"
            ],
            [
                "name" => "Glorinha"
            ],
            [
                "name" => "Gramado"
            ],
            [
                "name" => "Gramado dos Loureiros"
            ],
            [
                "name" => "Gramado Xavier"
            ],
            [
                "name" => "Gravataí"
            ],
            [
                "name" => "Guabiju"
            ],
            [
                "name" => "Guaíba"
            ],
            [
                "name" => "Guaporé"
            ],
            [
                "name" => "Guarani das Missões"
            ],
            [
                "name" => "Harmonia"
            ],
            [
                "name" => "Herveiras"
            ],
            [
                "name" => "Horizontina"
            ],
            [
                "name" => "Hulha Negra"
            ],
            [
                "name" => "Humaitá"
            ],
            [
                "name" => "Ibarama"
            ],
            [
                "name" => "Ibiaçá"
            ],
            [
                "name" => "Ibiraiaras"
            ],
            [
                "name" => "Ibirapuitã"
            ],
            [
                "name" => "Ibirubá"
            ],
            [
                "name" => "Igrejinha"
            ],
            [
                "name" => "Ijuí"
            ],
            [
                "name" => "Ilópolis"
            ],
            [
                "name" => "Imbé"
            ],
            [
                "name" => "Imigrante"
            ],
            [
                "name" => "Independência"
            ],
            [
                "name" => "Inhacorá"
            ],
            [
                "name" => "Ipê"
            ],
            [
                "name" => "Ipiranga do Sul"
            ],
            [
                "name" => "Iraí"
            ],
            [
                "name" => "Itaara"
            ],
            [
                "name" => "Itacurubi"
            ],
            [
                "name" => "Itapuca"
            ],
            [
                "name" => "Itaqui"
            ],
            [
                "name" => "Itati"
            ],
            [
                "name" => "Itatiba do Sul"
            ],
            [
                "name" => "Ivorá"
            ],
            [
                "name" => "Ivoti"
            ],
            [
                "name" => "Jaboticaba"
            ],
            [
                "name" => "Jacuizinho"
            ],
            [
                "name" => "Jacutinga"
            ],
            [
                "name" => "Jaguarão"
            ],
            [
                "name" => "Jaguari"
            ],
            [
                "name" => "Jaquirana"
            ],
            [
                "name" => "Jari"
            ],
            [
                "name" => "Jóia"
            ],
            [
                "name" => "Júlio de Castilhos"
            ],
            [
                "name" => "Lagoa Bonita do Sul"
            ],
            [
                "name" => "Lagoão"
            ],
            [
                "name" => "Lagoa dos Três Cantos"
            ],
            [
                "name" => "Lagoa Vermelha"
            ],
            [
                "name" => "Lajeado"
            ],
            [
                "name" => "Lajeado do Bugre"
            ],
            [
                "name" => "Lavras do Sul"
            ],
            [
                "name" => "Liberato Salzano"
            ],
            [
                "name" => "Lindolfo Collor"
            ],
            [
                "name" => "Linha Nova"
            ],
            [
                "name" => "Machadinho"
            ],
            [
                "name" => "Maçambará"
            ],
            [
                "name" => "Mampituba"
            ],
            [
                "name" => "Manoel Viana"
            ],
            [
                "name" => "Maquiné"
            ],
            [
                "name" => "Maratá"
            ],
            [
                "name" => "Marau"
            ],
            [
                "name" => "Marcelino Ramos"
            ],
            [
                "name" => "Mariana Pimentel"
            ],
            [
                "name" => "Mariano Moro"
            ],
            [
                "name" => "Marques de Souza"
            ],
            [
                "name" => "Mata"
            ],
            [
                "name" => "Mato Castelhano"
            ],
            [
                "name" => "Mato Leitão"
            ],
            [
                "name" => "Mato Queimado"
            ],
            [
                "name" => "Maximiliano de Almeida"
            ],
            [
                "name" => "Minas do Leão"
            ],
            [
                "name" => "Miraguaí"
            ],
            [
                "name" => "Montauri"
            ],
            [
                "name" => "Monte Alegre dos Campos"
            ],
            [
                "name" => "Monte Belo do Sul"
            ],
            [
                "name" => "Montenegro"
            ],
            [
                "name" => "Mormaço"
            ],
            [
                "name" => "Morrinhos do Sul"
            ],
            [
                "name" => "Morro Redondo"
            ],
            [
                "name" => "Morro Reuter"
            ],
            [
                "name" => "Mostardas"
            ],
            [
                "name" => "Muçum"
            ],
            [
                "name" => "Muitos Capões"
            ],
            [
                "name" => "Muliterno"
            ],
            [
                "name" => "Não-Me-Toque"
            ],
            [
                "name" => "Nicolau Vergueiro"
            ],
            [
                "name" => "Nonoai"
            ],
            [
                "name" => "Nova Alvorada"
            ],
            [
                "name" => "Nova Araçá"
            ],
            [
                "name" => "Nova Bassano"
            ],
            [
                "name" => "Nova Boa Vista"
            ],
            [
                "name" => "Nova Bréscia"
            ],
            [
                "name" => "Nova Candelária"
            ],
            [
                "name" => "Nova Esperança do Sul"
            ],
            [
                "name" => "Nova Hartz"
            ],
            [
                "name" => "Nova Pádua"
            ],
            [
                "name" => "Nova Palma"
            ],
            [
                "name" => "Nova Petrópolis"
            ],
            [
                "name" => "Nova Prata"
            ],
            [
                "name" => "Nova Ramada"
            ],
            [
                "name" => "Nova Roma do Sul"
            ],
            [
                "name" => "Nova Santa Rita"
            ],
            [
                "name" => "Novo Cabrais"
            ],
            [
                "name" => "Novo Hamburgo"
            ],
            [
                "name" => "Novo Machado"
            ],
            [
                "name" => "Novo Tiradentes"
            ],
            [
                "name" => "Novo Xingu"
            ],
            [
                "name" => "Novo Barreiro"
            ],
            [
                "name" => "Osório"
            ],
            [
                "name" => "Paim Filho"
            ],
            [
                "name" => "Palmares do Sul"
            ],
            [
                "name" => "Palmeira das Missões"
            ],
            [
                "name" => "Palmitinho"
            ],
            [
                "name" => "Panambi"
            ],
            [
                "name" => "Pantano Grande"
            ],
            [
                "name" => "Paraí"
            ],
            [
                "name" => "Paraíso do Sul"
            ],
            [
                "name" => "Pareci Novo"
            ],
            [
                "name" => "Parobé"
            ],
            [
                "name" => "Passa Sete"
            ],
            [
                "name" => "Passo do Sobrado"
            ],
            [
                "name" => "Passo Fundo"
            ],
            [
                "name" => "Paulo Bento"
            ],
            [
                "name" => "Paverama"
            ],
            [
                "name" => "Pedras Altas"
            ],
            [
                "name" => "Pedro Osório"
            ],
            [
                "name" => "Pejuçara"
            ],
            [
                "name" => "Pelotas"
            ],
            [
                "name" => "Picada Café"
            ],
            [
                "name" => "Pinhal"
            ],
            [
                "name" => "Pinhal da Serra"
            ],
            [
                "name" => "Pinhal Grande"
            ],
            [
                "name" => "Pinheirinho do Vale"
            ],
            [
                "name" => "Pinheiro Machado"
            ],
            [
                "name" => "Pinto Bandeira"
            ],
            [
                "name" => "Pirapó"
            ],
            [
                "name" => "Piratini"
            ],
            [
                "name" => "Planalto"
            ],
            [
                "name" => "Poço das Antas"
            ],
            [
                "name" => "Pontão"
            ],
            [
                "name" => "Ponte Preta"
            ],
            [
                "name" => "Portão"
            ],
            [
                "name" => "Porto Alegre"
            ],
            [
                "name" => "Porto Lucena"
            ],
            [
                "name" => "Porto Mauá"
            ],
            [
                "name" => "Porto Vera Cruz"
            ],
            [
                "name" => "Porto Xavier"
            ],
            [
                "name" => "Pouso Novo"
            ],
            [
                "name" => "Presidente Lucena"
            ],
            [
                "name" => "Progresso"
            ],
            [
                "name" => "Protásio Alves"
            ],
            [
                "name" => "Putinga"
            ],
            [
                "name" => "Quaraí"
            ],
            [
                "name" => "Quatro Irmãos"
            ],
            [
                "name" => "Quevedos"
            ],
            [
                "name" => "Quinze de Novembro"
            ],
            [
                "name" => "Redentora"
            ],
            [
                "name" => "Relvado"
            ],
            [
                "name" => "Restinga Sêca"
            ],
            [
                "name" => "Rio dos Índios"
            ],
            [
                "name" => "Rio Grande"
            ],
            [
                "name" => "Rio Pardo"
            ],
            [
                "name" => "Riozinho"
            ],
            [
                "name" => "Roca Sales"
            ],
            [
                "name" => "Rodeio Bonito"
            ],
            [
                "name" => "Rolador"
            ],
            [
                "name" => "Rolante"
            ],
            [
                "name" => "Ronda Alta"
            ],
            [
                "name" => "Rondinha"
            ],
            [
                "name" => "Roque Gonzales"
            ],
            [
                "name" => "Rosário do Sul"
            ],
            [
                "name" => "Sagrada Família"
            ],
            [
                "name" => "Saldanha Marinho"
            ],
            [
                "name" => "Salto do Jacuí"
            ],
            [
                "name" => "Salvador das Missões"
            ],
            [
                "name" => "Salvador do Sul"
            ],
            [
                "name" => "Sananduva"
            ],
            [
                "name" => "Santa Bárbara do Sul"
            ],
            [
                "name" => "Santa Cecília do Sul"
            ],
            [
                "name" => "Santa Clara do Sul"
            ],
            [
                "name" => "Santa Cruz do Sul"
            ],
            [
                "name" => "Santa Maria"
            ],
            [
                "name" => "Santa Maria do Herval"
            ],
            [
                "name" => "Santa Margarida do Sul"
            ],
            [
                "name" => "Santana da Boa Vista"
            ],
            [
                "name" => "Sant'Ana do Livramento"
            ],
            [
                "name" => "Santa Rosa"
            ],
            [
                "name" => "Santa Tereza"
            ],
            [
                "name" => "Santa Vitória do Palmar"
            ],
            [
                "name" => "Santiago"
            ],
            [
                "name" => "Santo Ângelo"
            ],
            [
                "name" => "Santo Antônio do Palma"
            ],
            [
                "name" => "Santo Antônio da Patrulha"
            ],
            [
                "name" => "Santo Antônio das Missões"
            ],
            [
                "name" => "Santo Antônio do Planalto"
            ],
            [
                "name" => "Santo Augusto"
            ],
            [
                "name" => "Santo Cristo"
            ],
            [
                "name" => "Santo Expedito do Sul"
            ],
            [
                "name" => "São Borja"
            ],
            [
                "name" => "São Domingos do Sul"
            ],
            [
                "name" => "São Francisco de Assis"
            ],
            [
                "name" => "São Francisco de Paula"
            ],
            [
                "name" => "São Gabriel"
            ],
            [
                "name" => "São Jerônimo"
            ],
            [
                "name" => "São João da Urtiga"
            ],
            [
                "name" => "São João do Polêsine"
            ],
            [
                "name" => "São Jorge"
            ],
            [
                "name" => "São José das Missões"
            ],
            [
                "name" => "São José do Herval"
            ],
            [
                "name" => "São José do Hortêncio"
            ],
            [
                "name" => "São José do Inhacorá"
            ],
            [
                "name" => "São José do Norte"
            ],
            [
                "name" => "São José do Ouro"
            ],
            [
                "name" => "São José do Sul"
            ],
            [
                "name" => "São José dos Ausentes"
            ],
            [
                "name" => "São Leopoldo"
            ],
            [
                "name" => "São Lourenço do Sul"
            ],
            [
                "name" => "São Luiz Gonzaga"
            ],
            [
                "name" => "São Marcos"
            ],
            [
                "name" => "São Martinho"
            ],
            [
                "name" => "São Martinho da Serra"
            ],
            [
                "name" => "São Miguel das Missões"
            ],
            [
                "name" => "São Nicolau"
            ],
            [
                "name" => "São Paulo das Missões"
            ],
            [
                "name" => "São Pedro da Serra"
            ],
            [
                "name" => "São Pedro das Missões"
            ],
            [
                "name" => "São Pedro do Butiá"
            ],
            [
                "name" => "São Pedro do Sul"
            ],
            [
                "name" => "São Sebastião do Caí"
            ],
            [
                "name" => "São Sepé"
            ],
            [
                "name" => "São Valentim"
            ],
            [
                "name" => "São Valentim do Sul"
            ],
            [
                "name" => "São Valério do Sul"
            ],
            [
                "name" => "São Vendelino"
            ],
            [
                "name" => "São Vicente do Sul"
            ],
            [
                "name" => "Sapiranga"
            ],
            [
                "name" => "Sapucaia do Sul"
            ],
            [
                "name" => "Sarandi"
            ],
            [
                "name" => "Seberi"
            ],
            [
                "name" => "Sede Nova"
            ],
            [
                "name" => "Segredo"
            ],
            [
                "name" => "Selbach"
            ],
            [
                "name" => "Senador Salgado Filho"
            ],
            [
                "name" => "Sentinela do Sul"
            ],
            [
                "name" => "Serafina Corrêa"
            ],
            [
                "name" => "Sério"
            ],
            [
                "name" => "Sertão"
            ],
            [
                "name" => "Sertão Santana"
            ],
            [
                "name" => "Sete de Setembro"
            ],
            [
                "name" => "Severiano de Almeida"
            ],
            [
                "name" => "Silveira Martins"
            ],
            [
                "name" => "Sinimbu"
            ],
            [
                "name" => "Sobradinho"
            ],
            [
                "name" => "Soledade"
            ],
            [
                "name" => "Tabaí"
            ],
            [
                "name" => "Tapejara"
            ],
            [
                "name" => "Tapera"
            ],
            [
                "name" => "Tapes"
            ],
            [
                "name" => "Taquara"
            ],
            [
                "name" => "Taquari"
            ],
            [
                "name" => "Taquaruçu do Sul"
            ],
            [
                "name" => "Tavares"
            ],
            [
                "name" => "Tenente Portela"
            ],
            [
                "name" => "Terra de Areia"
            ],
            [
                "name" => "Teutônia"
            ],
            [
                "name" => "Tio Hugo"
            ],
            [
                "name" => "Tiradentes do Sul"
            ],
            [
                "name" => "Toropi"
            ],
            [
                "name" => "Torres"
            ],
            [
                "name" => "Tramandaí"
            ],
            [
                "name" => "Travesseiro"
            ],
            [
                "name" => "Três Arroios"
            ],
            [
                "name" => "Três Cachoeiras"
            ],
            [
                "name" => "Três Coroas"
            ],
            [
                "name" => "Três de Maio"
            ],
            [
                "name" => "Três Forquilhas"
            ],
            [
                "name" => "Três Palmeiras"
            ],
            [
                "name" => "Três Passos"
            ],
            [
                "name" => "Trindade do Sul"
            ],
            [
                "name" => "Triunfo"
            ],
            [
                "name" => "Tucunduva"
            ],
            [
                "name" => "Tunas"
            ],
            [
                "name" => "Tupanci do Sul"
            ],
            [
                "name" => "Tupanciretã"
            ],
            [
                "name" => "Tupandi"
            ],
            [
                "name" => "Tuparendi"
            ],
            [
                "name" => "Turuçu"
            ],
            [
                "name" => "Ubiretama"
            ],
            [
                "name" => "União da Serra"
            ],
            [
                "name" => "Unistalda"
            ],
            [
                "name" => "Uruguaiana"
            ],
            [
                "name" => "Vacaria"
            ],
            [
                "name" => "Vale Verde"
            ],
            [
                "name" => "Vale do Sol"
            ],
            [
                "name" => "Vale Real"
            ],
            [
                "name" => "Vanini"
            ],
            [
                "name" => "Venâncio Aires"
            ],
            [
                "name" => "Vera Cruz"
            ],
            [
                "name" => "Veranópolis"
            ],
            [
                "name" => "Vespasiano Corrêa"
            ],
            [
                "name" => "Viadutos"
            ],
            [
                "name" => "Viamão"
            ],
            [
                "name" => "Vicente Dutra"
            ],
            [
                "name" => "Victor Graeff"
            ],
            [
                "name" => "Vila Flores"
            ],
            [
                "name" => "Vila Lângaro"
            ],
            [
                "name" => "Vila Maria"
            ],
            [
                "name" => "Vila Nova do Sul"
            ],
            [
                "name" => "Vista Alegre"
            ],
            [
                "name" => "Vista Alegre do Prata"
            ],
            [
                "name" => "Vista Gaúcha"
            ],
            [
                "name" => "Vitória das Missões"
            ],
            [
                "name" => "Westfália"
            ],
            [
                "name" => "Xangri-lá"
            ]
        ];

        return $cities;



    }


    public static function getShelters()
    {

        $seconds = 3600 * 24;
        $shelters = [];

        cache()->remember('shelters', $seconds, function () {

            $getShelters = Http::get('https://api.sos-rs.com/shelters?orderBy=prioritySum&order=desc&page=1&perPage=100')->json();

            $count = $getShelters['data']['count'];
            $perPage = $getShelters['data']['perPage'];

            $calc = $count / $perPage;
            $pages = ceil($calc);
            $pages = intval($pages);

            $sheltersArray = [];
            for ($i = 2; $i <= $pages; $i++) {
                $getShelter = Http::get('https://api.sos-rs.com/shelters?orderBy=prioritySum&order=desc&page=' . $i . '&perPage=100')->json();
                $sheltersArray[] = $getShelter['data']['results'];
            }

            $sheltersArray = array_merge($getShelters['data']['results'], $sheltersArray[0], $sheltersArray[1]);

            return $sheltersArray;

        });

        if (Cache::has('shelters')) {
            $shelters = Cache::get('shelters');
        }

        return $shelters;

    }


    public static function checkUser()
    {

        if (Auth::user()->role_id == 2) {
            return true;
        } else {
            return false;
        }

    }

}
