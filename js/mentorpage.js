const wrapper = document.querySelector('.wrapper');
wrapper.classList.add('wrapper');


const displayMentors = (data) => {
    let count = 0;
    data.forEach((data) => {
        let wrapperChild = document.createElement('div');
        wrapperChild.classList.add('wrapper-child');
        wrapperChild.style.marginBottom = '4rem';

        let image = document.createElement('img');
        image.classList.add('image');
        image.src = data.imgUrl;
        let heading = document.createElement('h4');
        heading.innerHTML = data.name;

        let paragraph = document.createElement('p');
        paragraph.innerHTML = data.stack;

        let spanOne = document.createElement('span');
        let spanTwo = document.createElement('span');
        let spanThree = document.createElement('span');

        let a1 = document.createElement('a');
        let a2 = document.createElement('a');
        let a3 = document.createElement('a');

        // addition of links to the social icons
        a1.setAttribute("href", "https://twitter.com");
        a2.setAttribute("href", "https://facebook.com");
        a3.setAttribute("href", "https://github.com");
        // end

        let iconOne = document.createElement('i');
        let iconTwo = document.createElement('i');
        let iconThree = document.createElement('i');

        iconOne.classList.add('fab');
        iconOne.classList.add('fa-twitter');

        iconTwo.classList.add('fab');
        iconTwo.classList.add('fa-facebook-square');

        iconThree.classList.add('fab');
        iconThree.classList.add('fa-dribbble');

        a1.appendChild(iconOne);
        a2.appendChild(iconTwo);
        a3.appendChild(iconThree);

        spanOne.appendChild(a1)
        spanTwo.appendChild(a2)
        spanThree.appendChild(a3)

        const socialIcons = document.createElement('div');
        socialIcons.classList.add('social-icons');

        socialIcons.appendChild(spanOne);
        socialIcons.appendChild(spanTwo);
        socialIcons.appendChild(spanThree);


        if(count <= 0 || count === 4) {
            spanOne.classList.add('first-color');
            spanTwo.classList.add('first-color');
            spanThree.classList.add('first-color');
            if(count === 4) {
                count = 0;
            }
        } else if(count > 0 && count <= 1) {
            spanOne.classList.add('second-color');
            spanTwo.classList.add('second-color');
            spanThree.classList.add('second-color');
        } else if(count > 1 && count <= 2) {
            spanOne.classList.add('third-color');
            spanTwo.classList.add('third-color');
            spanThree.classList.add('third-color');
        } else if(count > 2 && count <= 3) {
            spanOne.classList.add('fourth-color');
            spanTwo.classList.add('fourth-color');
            spanThree.classList.add('fourth-color');
        }

        wrapperChild.appendChild(image);
        wrapperChild.appendChild(heading);
        wrapperChild.appendChild(paragraph);
        wrapperChild.appendChild(socialIcons);




        wrapper.appendChild(wrapperChild);

        count += 1;

    })
}

// adding real contents to mentors

const mentorsArr = [
    {
        name: "Seyi Onifade",
        stack: "Web Developer",
        imgUrl: 'https://res.cloudinary.com/mirakul1/image/upload/v1572714005/pvrvbhm2gzf3di8exdic.jpg'
    },
    {
        name: "Wisdom Ebong",
        stack: "Software Developer",
        imgUrl: "https://res.cloudinary.com/mirakul1/image/upload/v1572708194/jwbv5vvnyhobkahj2wfe.jpg"
    },
    {
        name: "Oluwatoba Adeyefa",
        stack: "Software Engineer",
        imgUrl: "https://res.cloudinary.com/mirakul1/image/upload/v1572708376/uc1euapilfxdltt2f6vv.jpg"
    },
    {
        name: "Albert Oboh",
        stack: "Mobile Developer",
        imgUrl: 'https://res.cloudinary.com/mirakul1/image/upload/v1572708379/hl9cyc0wvwfnsqwyx2ut.jpg'
    },
    {
        name: "Chiamaka Osumgba",
        stack: "Web Developer",
        imgUrl: "https://res.cloudinary.com/mirakul1/image/upload/v1572708383/lgunrk85fbmakmzovoyo.jpg"
    },
    {
        name: "Obinna Okoh",
        stack: "UI Designer",
        imgUrl: "https://res.cloudinary.com/mirakul1/image/upload/v1572709453/o8hizwuab9chkdbbjmgv.jpg"
    },
    {
        name: "Kelvin Chikezie",
        stack: "Web Developer",
        imgUrl: "https://res.cloudinary.com/mirakul1/image/upload/v1572709450/tea5kdnvp06hn93uwrec.jpg"
    },
    {
        name: "Jeffrey Ogah",
        stack: "Web Developer",
        imgUrl: "https://res.cloudinary.com/mirakul1/image/upload/v1572708316/xxtsmer2gqklhcudgejb.jpg"
    },
    {
        name: "Amujo Dotun",
        stack: "Web Developer",
        imgUrl: "https://res.cloudinary.com/mirakul1/image/upload/v1572708383/zbes6mtacyac6uusr0ap.jpg"
    },
    {
        name: "Da-costa Motun",
        stack: "Frontend Developer",
        imgUrl: 'https://res.cloudinary.com/mirakul1/image/upload/v1572709490/wnlodfcoo8libbsyz7ne.jpg'
    },
    {
        name: "John Ademoye",
        stack: "Web Developer",
        imgUrl: "https://res.cloudinary.com/mirakul1/image/upload/v1572709556/qqyar0cs2blvnv854ex1.jpg"
    },
    {
        name: "Sherif Dauda",
        stack: "UI/UX Designer",
        imgUrl: "https://res.cloudinary.com/mirakul1/image/upload/v1572709448/b7rmlwwaexpvvjq90wrc.jpg"
    },
    {
        name: "Edidiong Etuk",
        stack: "Machine Learning",
        imgUrl: 'https://res.cloudinary.com/mirakul1/image/upload/v1572708384/sik1br0sntsdxc3j2osb.jpg'
    },
    {
        name: "Chinedu Ebinim",
        stack: "Web Developer",
        imgUrl: "https://res.cloudinary.com/mirakul1/image/upload/v1572708615/ero23yofvizjekktou3j.jpg"
    },
    {
        name: "Iheonye Emeka",
        stack: "Product Designer",
        imgUrl: "https://res.cloudinary.com/mirakul1/image/upload/v1572708340/pnyyg84mak5bxlnmpcqy.png"
    },
    {
        name: "Idris Lawal",
        stack: "Software Engineer",
        imgUrl: 'https://res.cloudinary.com/mirakul1/image/upload/v1572709502/eahcxdsjgpkz24c9e8bf.jpg'
    },
    {
        name: "Oluwaseyi Pelumi",
        stack: "Devops Engineer",
        imgUrl: "https://res.cloudinary.com/mirakul1/image/upload/v1572714007/mjgnktps2zyo1zedz9qb.png"
    },

    // end of real contents
    {
        name: "Somtozech",
        stack: "Web Developer",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
    },
    {
        name: "Cole Solomon",
        stack: "Product Designer",
        imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk=""'
    },
    {
        name: "Motunrayo",
        stack: "Frontend Developer",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk="
    },
    {
        name: "Maaruf Dauda",
        stack: "Web Developer",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt="
    },
    {
        name: "Romina Hadid",
        stack: "Marketing Strategist",
        imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg""'
    },
    {
        name: "Alex Smith",
        stack: "UI/UX Designer",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
    },
    {
        name: "John Doe",
        stack: "Founder and CEO",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
    },
    {
        name: "Thompson",
        stack: "Web Developer",
        imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
    },
    {
        name: "Romina Hadid",
        stack: "Marketing Strategist",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
    },
    {
        name: "Alex Smith",
        stack: "UI/UX Designer",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
    },
    {
        name: "John Doe",
        stack: "Founder and CEO",
        imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk""'
    },
    {
        name: "Thompson",
        stack: "Web Developer",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt="
    },
    {
        name: "Romina Hadid",
        stack: "Marketing Strategist",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
    },
    {
        name: "Alex Smith",
        stack: "UI/UX Designer",
        imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk""'
    },
    {
        name: "John Doe",
        stack: "Founder and CEO",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
    },
    {
        name: "Thompson",
        stack: "Web Developer",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt="
    },
    {
        name: "Romina Hadid",
        stack: "Marketing Strategist",
        imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg""'
    },
    {
        name: "Alex Smith",
        stack: "UI/UX Designer",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
    },
    {
        name: "John Doe",
        stack: "Founder and CEO",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
    },
    {
        name: "Thompson",
        stack: "Web Developer",
        imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
    },
    {
        name: "Romina Hadid",
        stack: "Marketing Strategist",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
    },
    {
        name: "Alex Smith",
        stack: "UI/UX Designer",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
    },
    {
        name: "John Doe",
        stack: "Founder and CEO",
        imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk""'
    },
    {
        name: "Thompson",
        stack: "Web Developer",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt"
    },
    {
        name: "Romina Hadid",
        stack: "Marketing Strategist",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
    },
    {
        name: "Alex Smith",
        stack: "UI/UX Designer",
        imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
    },
    {
        name: "John Doe",
        stack: "Founder and CEO",
        imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
    },
];

displayMentors(mentorsArr);