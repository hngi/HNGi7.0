
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


  const mentorsArr = [
  {
    name: "Oluwatoni Atunrase",
    stack: "Web Developer",
    imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
  },
  {
     name: "Patrick Aziken",
     stack: "Software Tester",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Stephen Azubuike",
     stack: "UI/UX Designer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Everitus Olumese",
     stack: "Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Osumgha Chiamaka",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Aboagye",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "John Ademoye",
     stack: "Web Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Adeyefa Oluwatoba",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Adolphus Chris",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Ogundiji Bolade",
     stack: "Web Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Ajayi Jeremiah",
     stack: "Backend Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Albert Oboh",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Amujo Oluwasomido",
     stack: "Web Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Chigozie",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Kev Chike",
     stack: "Software Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Chinedu Ebinim",
     stack: "Web Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Chukwuemeka Iheonye",
     stack: "Product Designer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Somtozech",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Cole Solomon",
     stack: "Product Designer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Motunrayo Da-costa",
     stack: "Frontend Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Maaruf Dauda",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Romina Hadid",
     stack: "Marketing Strategist",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
    {
     name: "Alexander Smith",
     stack: "UI/UX Designer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "John Doe",
     stack: "Founder and CEO",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
    {
     name: "Ryan Thompson",
     stack: "Web Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Romina Hadid",
     stack: "Marketing Strategist",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
    {
     name: "Alexander Smith",
     stack: "UI/UX Designer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "John Doe",
     stack: "Founder and CEO",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Ryan Thompson",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Romina Hadid",
     stack: "Marketing Strategist",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
    {
     name: "Alexander Smith",
     stack: "UI/UX Designer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "John Doe",
     stack: "Founder and CEO",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Ryan Thompson",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Romina Hadid",
     stack: "Marketing Strategist",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
    {
     name: "Alexander Smith",
     stack: "UI/UX Designer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "John Doe",
     stack: "Founder and CEO",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Ryan Thompson",
     stack: "Web Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Romina Hadid",
     stack: "Marketing Strategist",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
    {
     name: "Alexander Smith",
     stack: "UI/UX Designer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "John Doe",
     stack: "Founder and CEO",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Ryan Thompson",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Romina Hadid",
     stack: "Marketing Strategist",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
    {
     name: "Alexander Smith",
     stack: "UI/UX Designer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "John Doe",
     stack: "Founder and CEO",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
 ];

 displayMentors(mentorsArr);