const ID_TOKEN_KEY = "token";
const ROLE ="role";

export const getToken = () => {
  return window.localStorage.getItem(ID_TOKEN_KEY);
};
export const getRole = () => {
  return window.localStorage.getItem(ROLE);
};

export const saveToken = (token, role) => {
  window.localStorage.setItem(ID_TOKEN_KEY, token);
  window.localStorage.setItem(ROLE, role);
};

export const destroyToken = () => {
  window.localStorage.removeItem(ID_TOKEN_KEY);
  window.localStorage.removeItem(ROLE);
};

export default { getToken, saveToken, destroyToken };
