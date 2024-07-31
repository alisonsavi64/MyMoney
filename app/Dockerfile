FROM node:18

WORKDIR /app

COPY package*.json /app

RUN npm install

COPY . /app

RUN npm install -g expo-cli

EXPOSE 19000
EXPOSE 19001
EXPOSE 19002

CMD ["npx", "expo", "start", "--host", "0.0.0.0"]
