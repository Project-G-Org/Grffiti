# https://geshan.com.np/blog/2023/01/nextjs-docker/
FROM node:18

WORKDIR /projectg

COPY . .
RUN npm install --production

RUN npm run build
CMD ["npm", "start"] 