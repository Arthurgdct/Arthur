document.getElementById('arrow').addEventListener('click', () => {
    modifyText(newSentence());
},false);

function modifyText(newText) {
    const sentence = document.getElementById("sentence");
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
    let result = getRandomInt(1, 8);
    console.log(result);
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
    }
}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    max = max + 1;
    return Math.floor(Math.random() * (max - min) + min)
}



