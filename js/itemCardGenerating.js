const items = [
    {
        cardLabel: "Prime",
        price: 1000,
        itemInfo: "Описание товара",
        salerName: "Ник продавца",
        itemName: "Аккаунт CS2",
        itemImage: "source/cs2prime.jpg",
        altImgTxt: "Аккаунт CS2 prime"
    },
    {
      price: 300,
      cardLabel: "Prime + 10 ранг",
      itemInfo: "Описание товара",
      salerName: "Ник продавца",
      itemName: "Аккаунт CS2",
      itemImage: "source/cs2prime.jpg",
      altImgTxt: "Аккаунт CS2 prime 10 rang"
    },
    {
      itemName: "Аккаунт DOTA2",
      itemInfo: "Описание товара",
      salerName: "Ник продавца",
      itemImage: "source/DOTA2Acc.jpeg",
      price: 999,
      cardLabel: "-10%",
      altImgTxt: "Аккаунт DOTA2"
    },
    {
      itemName: "Аккаунт CS2",
      itemInfo: "Описание товара",
      salerName: "M0NESY",
      itemImage: "source/cs2prime.jpg",
      price: 50000,
      cardLabel: "Аккаунт Донка",
      altImgTxt: "Аккаунт CS2"
    },
    {
      itemName: "Аккаунт CS 1.6",
      itemInfo: "Описание товара",
      salerName: "zont1x",
      itemImage: "source/cs1.6.webp",
      price: 500,
      cardLabel: "Аккаунт Донка",
      altImgTxt: "Аккаунт CS2"
    },
    {
      itemName: "Аккаунт CS 1.6",
      itemInfo: "Описание товара",
      salerName: "zont1x",
      itemImage: "source/cs1.6.webp",
      price: 500,
      cardLabel: "prime",
      altImgTxt: "Аккаунт CS2"
    },
    {
      itemName: "Аккаунт CS 1.6",
      itemInfo: "Описание товара",
      salerName: "zont1x",
      itemImage: "source/cs1.6.webp",
      price: 500,
      cardLabel: "-10%",
      altImgTxt: "Аккаунт CS2"
    },
    {
      itemName: "Аккаунт GTA V",
      itemInfo: "Описание товара",
      salerName: "saler",
      itemImage: "source/gta.webp",
      price: 299,
      cardLabel: "ban",
      altImgTxt: "Аккаунт GTA"
    }
  
  ]
  
  
  const container = document.getElementById('catalog-popular');
  items.forEach ( (item, idx) => {
    const card = document.createElement('div');
    card.classList = 'item-card';
  
    const content = `
    
    `;
  
    container.innerHTML += content;
  })