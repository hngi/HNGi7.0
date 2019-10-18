Please before you push your codes to the repository make sure you pull from the repository, so the changes that have been made can be reflected on your local machine, for us to avoid merge conflicts
use the git command line
```git
    git pull 
```

# Developers guide.
This process here should be able to guide you on how to contribute effectively to this project, follow the steps below. You should not be new to the git workflow process however if you still are, the guide should still be able to help you through the process.

- Fork the repository to generate a copy of your own.
- Clone the repository.
```use git command line
    git clone https://github.com/hngi/HNG6.0.git
```
- Make the repository (the forked repo) the remote upstream 
```use git command line
    git add remote upstream https://github.com/hngi/HNG6.0.git
```
- Create a branch, the branch name should at least be meaningfull e.g if you're working on the footer, your branch name would be;
```use git command line
    git checkout -b footer
```
- Make your changes, add them and make your commits
```use git command line 
    git commit -m "your message"
```
- Push your codes to the remote upstream repository
```use git command line
    git push -u origin master
```
- Or you can also push your code to the current branch which you are in.
- Make your Pull request and wait for it to be merged.

# Happy hacking!
