'use strict';

/**
 * @ngdoc function
 * @name matepaivaApp.controller:QuemsouCtrl
 * @description
 * # QuemsouCtrl
 * Controller of the matepaivaApp
 */
angular.module('matepaivaApp')
    .controller('QuemsouCtrl', function ($scope) {
        $scope.phrase = "Deixei no final da página meu contato. Vamos conversar sobre o seu projeto? Só chamar!";
        $scope.title = "Mate Paiva";
        $scope.description = "Apaixonado por escrever: seja em linguagem de máquina ou humana. Formado em Jornalismo e pós-graduado em Cibercultura, trabalho com conteúdo web desde 2010. No final de 2012, fiz uma viagem de bicicleta entre SP, MG e RJ que me rendeu muita vivência e ótimas histórias. Em 2015, descobri um novo universo com a programação. Tenho a esperança de nunca parar de aprender.";
        $scope.image = "images/avat.jpg";
        $scope.tags = ["Social Media", "Linux", "Inkscape", "Gimp", "Atom", "Sublime2", "Flat Design", "HTML5", "AngularJS", "VanillaJS", "JQuery", "JSON", "NodeJS", "MongoDB", "CasperJS", "MathJax", "LaTeX", "Git", "Design responsivo", "CSS3"];
        $scope.academics = [{
            title: "CS50x: Introduction to Computer Science",
            institution: "HarvardX (Harvard University + edX)",
            date: {
                start: new Date(2016, 0)
            },
        }, {
            title: "PÓS-GRADUAÇÃO: Comunicação Jornalística, enfoque em Cibercultura",
            institution: "Faculdade Casper Líbero",
            date: {
                start: new Date(2009, 0),
                end: new Date(2010, 0)
            },
        }, {
            title: "GRADUAÇÃO: Comunicação Social, Jornalismo",
            institution: "Universidade Católica de Santos - UniSantos",
            date: {
                start: new Date(2004, 0),
                end: new Date(2008, 0)
            },
        }];
        var courses = [{
            category: "Protocolos",
            title: "HTTP: Entendendo a web por baixo dos panos",
            institution: "Alura",
            date: new Date(2016, 7),
            link: "https://cursos.alura.com.br/user/mmccpp1/course/fundamentos-http/certificate",
        }, {
            category: "Java",
            title: "Java III: Principais APIs e bibliotecas",
            institution: "Alura",
            date: new Date(2016, 6),
            link: "https://cursos.alura.com.br/user/mmccpp1/course/java-e-bibliotecas/certificate",
        }, {
            category: "Java",
            title: "Java II - Orientação a objetos",
            institution: "Alura",
            date: new Date(2016, 6),
            link: "https://cursos.alura.com.br/user/mmccpp1/course/java-e-orientacao-a-objetos/certificate",
        }, {
            category: "Java",
            title: "Java I - Primeiros passos",
            institution: "Alura",
            date: new Date(2016, 6),
            link: "https://cursos.alura.com.br/user/mmccpp1/course/primeiros-passos-com-java/certificate",
        }, {
            category: "JavaScript",
            title: "Try Ember",
            institution: "Code School",
            date: new Date(2016, 2),
            link: "http://www.codeschool.com/users/matepaiva/badges/607",
        }, {
            category: "JavaScript",
            title: "Real-time Web with Node.js",
            institution: "Code School",
            date: new Date(2015, 2),
            link: "http://www.codeschool.com/users/matepaiva/badges/107",
        }, {
            category: "JavaScript",
            title: "Shaping up with Angular.js",
            institution: "Code School",
            date: new Date(2015, 2),
            link: "http://www.codeschool.com/users/matepaiva/badges/392",
        }, {
            category: "JavaScript",
            title: "JavaScript Best Practices",
            institution: "Code School",
            date: new Date(2015, 1),
            link: "http://www.codeschool.com/users/matepaiva/badges/435",
        }, {
            category: "JavaScript",
            title: "JavaScript Road Trip",
            institution: "Code School",
            date: new Date(2015, 1),
            link: "http://beta.openbadges.org/share/fd83f2c7044e5c7ff65165a59f409d30/",
        }, {
            category: "SQL",
            title: "Aprenda SQL do Zero",
            institution: "Udemy",
            date: new Date(2016, 1),
            link: "http://ude.my/UC-301F39FO",
        }, {
            category: "SQL",
            title: "Learn SQL",
            institution: "Codecademy",
            date: new Date(2016, 1),
            link: "http://www.codecademy.com/matepaiva#completed-body",
        }, {
            category: "PHP",
            title: "PHP",
            institution: "Codecademy",
            date: new Date(2015, 9),
            link: "http://www.codecademy.com/matepaiva#completed-body",
        }, {
            category: "HTML & CSS",
            title: "HTML & CSS",
            institution: "Codecademy",
            date: new Date(2015, 9),
            link: "http://www.codecademy.com/matepaiva#completed-body",
        }, {
            category: "HTML & CSS",
            title: "Front-end Formations",
            institution: "Code School",
            date: new Date(2015, 4),
            link: "http://beta.openbadges.org/share/39ece310057788ebf0e4514f51086d33/",
        }, {
            category: "HTML & CSS",
            title: "Front-end Foundations",
            institution: "Code School",
            date: new Date(2015, 3),
            link: "http://beta.openbadges.org/share/39ece310057788ebf0e4514f51086d33/",
        }, {
            category: "Outros",
            title: "Learn the Command Line",
            institution: "Codecademy",
            date: new Date(2015, 9),
            link: "https://www.codecademy.com/matepaiva#completed-body",
        }, {
            category: "Outros",
            title: "Try Git",
            institution: "Code School",
            date: new Date(2015, 0),
            link: "https://www.codecademy.com/matepaiva#completed-body",
        }];
        $scope.courses = _.groupBy(courses, 'category');
        // <ul ng-repeat="(category, catCourses) in courses">{{category}}
        //   <li ng-repeat="course in catCourses">{{course.title}}</li>
        // </ul>
        $scope.outOfTheBox = [{
            category: "Idiomas",
            itens: ["Inglês avançado", "Espanhol intermediário"]
        }, {
            category: "Experiência no exterior",
            itens: ["6 meses em Bournemouth - Inglaterra | 2006"]
        }, {
            category: "Prêmios",
            itens: ["Finalista do 3º Prêmio Banco Real Jovem Jornalista. Reportagem: “Lixo deixa de ser lixo” | 2008"]
        }, {
            category: "Arte de rua",
            itens: ["Viagem de bicicleta (SP-MG-RJ) fazendo intervenções com livretos de poemas | 2013", "Performances com bolhas de sabão gigantes em SP | 2014"]
        }];
    });
