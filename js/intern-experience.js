        const wrapper = document.querySelector('.wrapper');
        wrapper.classList.add('wrapper');


        const displayMentors = (data) => {
            let count = 0;
            data.forEach((data) => {
                let wrapperChild = document.createElement('div');
                wrapperChild.classList.add('wrapper-child');
                // wrapperChild.style.marginBottom = '4rem';


                let insideWrapper = document.createElement('div');
                insideWrapper.classList.add('insideWrapper');
                let hoverEffect = document.createElement('div');
                hoverEffect.classList.add('hoverEffect');

                let description = document.createElement('p');
                description.classList.add('description');
                description.innerHTML = data.stack;

                let image = document.createElement('img');
                image.classList.add('image');
                image.src = data.imgUrl;
                let heading = document.createElement('h4');
                heading.innerHTML = data.name;


                // let paragraph = document.createElement('p');
                // paragraph.innerHTML = data.stack;

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


                if (count <= 0 || count === 4) {
                    spanOne.classList.add('first-color');
                    spanTwo.classList.add('first-color');
                    spanThree.classList.add('first-color');
                    if (count === 4) {
                        count = 0;
                    }
                } else if (count > 0 && count <= 1) {
                    spanOne.classList.add('second-color');
                    spanTwo.classList.add('second-color');
                    spanThree.classList.add('second-color');
                } else if (count > 1 && count <= 2) {
                    spanOne.classList.add('third-color');
                    spanTwo.classList.add('third-color');
                    spanThree.classList.add('third-color');
                } else if (count > 2 && count <= 3) {
                    spanOne.classList.add('fourth-color');
                    spanTwo.classList.add('fourth-color');
                    spanThree.classList.add('fourth-color');
                }

                wrapperChild.appendChild(insideWrapper);
                insideWrapper.appendChild(image);
                insideWrapper.appendChild(hoverEffect);
                hoverEffect.appendChild(description);
                wrapperChild.appendChild(heading);
                // wrapperChild.appendChild(paragraph);
                wrapperChild.appendChild(socialIcons);




                wrapper.appendChild(wrapperChild);

                count += 1;

            })
        }
