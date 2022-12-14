import { writable } from 'svelte-local-storage-store'

// First param `preferences` is the local storage key.
// Second param is the initial value.
export const preferences = writable('preferences', {
  session: 0
})

export const dataActiveUser = writable('dataActiveUser', {
  data: {}
})