# Docker
- install

`$ docker`

- Check Installation

`$ docker run hello-world`

`$ docker run -it ubantu bash`

- check host

`root@f7.....:/# cat etc/*release*`

- run container

if exsists run, else go to docker site and download
`$ docker run ubantu`


- lists running container

`$ docker ps`


- list all containers

`$ docker all`

- stop container

`$ docker stop ID/Name`

- delete containers

`$ docker rm ID/name`

- list of images

`$ docker images`

- remove images

`$ docker rmi image_name`

- download images

`$ docker pull ubantu`

- run command of running containers

`$ docker exec container_name cat /etc/hosts`
