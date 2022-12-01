document.getElementById('arrow').addEventListener('click', () => {
    modifySentence(newSentence());
},false);
document.getElementById('veryShort').addEventListener('click',() => {
    modifyDesc('Bonjour, je m\'appel Arthur. J\'ai 25 ans et je suis passionné d\'informatique. Je suis a la recherche d\'un apprentissage, je suis déterminé & j\'aime le travaille d\'équipe.')
})
document.getElementById('short').addEventListener('click',() => {
    modifyDesc('Bonjour, je m\'appel Arthur. J\'ai 25 ans et je suis passionné d\'informatique depuis mes 10 ans. Je suis a la recherche d\'un apprentissage afin de continuer ma reconversion et vivre d\'un emploi dans un domaine qui me passionne véritablement. Je suis déterminé & j\'aime le travaille d\'équipe.')
})
document.getElementById('classic').addEventListener('click',() => {
    modifyDesc('Bonjour, je m\'appel Arthur. J\'ai 25 ans et je suis passionné d\'informatique depuis mes 10 ans. Dans la vie j\'ai d\'abord fait des études de menuisierie puis j\'ai travailler 5 ans a l\'usine que j\'ai finalement abbandonner pour tenter ma chance de devenir developpeur et d\'en faire mon métier avec une formation intensive. Ce qui nous ammenne a ce jour, ou je suis a la recherche d\'un apprentissage afin de continuer ma reconversion et vivre d\'un emploi dans un domaine qui me passionne véritablement. Je suis quelqu\'un de déterminé qui aime le travaille d\'équipe et qui a énormenent envie d\'en apprendre plus chaque jours.')
})
document.getElementById('long').addEventListener('click',() => {
    modifyDesc('Bonjour, je m\'appel Arthur. J\'ai 25 ans et je suis passionné d\'informatique depuis mes 10 ans ou j\'ai découvert les ordinateurs grace a mon grand-pere qui était informaticien, il n\'aura fallut que quelques années avant que je commence a bidouiller mes premiers serveurs minecraft puis bien d\'autres aventures informatique on suivit... Mais dans la vie j\'ai d\'abord fait des études de menuisierie puis j\'ai travailler 5 ans a l\'usine que j\'ai finalement abbandonner pour tenter ma chance de devenir developpeur et d\'en faire mon métier avec une formation intensive. Ce qui nous ammenne a ce jour, ou je suis a la recherche d\'un apprentissage afin de continuer ma reconversion et vivre d\'un emploi dans un domaine qui me passionne véritablement. Tout ça pour vous dire que je suis quelqu\'un de déterminé qui aime le travaille d\'équipe et qui a énormenent envie d\'en apprendre plus chaque jours.')
})

function modifyDesc(newText) {
    const desc = document.getElementById('description');
    desc.firstChild.nodeValue = newText;
}

function modifySentence(newText) {
    const sentence = document.getElementById('sentence');
    sentence.firstChild.nodeValue = newText;
}

function newSentence() {
    let search = 'Est à la recherche d\'un apprentissage';
    let dev = 'Est developpeur Web Junior';
    let happy = 'Est content de vous voir ici !';
    let hope = 'Espère que le site vous plait !';
    let minecraft = 'C\'est peut etre inspiré de minecraft ??'
    let more = 'Veux toujours en apprendre plus';
    let best = 'Fera toujours de son mieux !';
    let team = 'Vie pour le travail d\'équipe !';
    let passion = 'Est véritablement passionné d\'informatique';
    let ask = 'Se demande si vous allez appuyer sur la flèche ?';
    let powered = 'Powered by Html Css Js php and more'
    let result = getRandomInt(1, 11);
    if (result == 1) {
        return search;
    } else if (result == 2) {
        return dev;
    } else if (result == 3) {
        return happy;
    } else if (result == 4) {
        return hope;
    } else if (result == 5) {
        return minecraft;
    } else if (result == 6) {
        return more;
    } else if (result == 7) {
        return best;
    } else if (result == 8) {
        return team;
    } else if (result == 9) {
        return passion;
    }else if (result == 10) {
        return ask;
    }else if (result == 11) {
        return powered;
    }
}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    max = max + 1;
    return Math.floor(Math.random() * (max - min) + min)
}



