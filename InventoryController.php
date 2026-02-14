<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index(Request $request)
    {
        $query = Inventory::query();

        // SEARCH
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('item_name', 'like', '%' . $request->search . '%')
                  ->orWhere('category', 'like', '%' . $request->search . '%')
                  ->orWhere('location', 'like', '%' . $request->search . '%');
            });
        }

        // CATEGORY FILTER
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // LOCATION FILTER
        if ($request->filled('location')) {
            $query->where('location', $request->location);
        }

        $inventories = $query->paginate(10)->withQueryString();
        $totalItems = Inventory::count(); // 🔥 hitung total data
        return view('InventoryManagement', compact('inventories', 'totalItems'));
    }

    // ==============================
    // SCAN BARCODE
    // ==============================

    public function scanForm()
    {
        return view('inventory-scan');
    }

    public function scanStore(Request $request)
    {
        $request->validate([
            'barcode' => 'required'
        ]);

        // Cek apakah barcode sudah ada
        $existing = Inventory::where('barcode', $request->barcode)->first();

        if ($existing) {
            // Kalau sudah ada → tambah stock
            $existing->increment('stock');
            return redirect()->back()->with('success', 'Stock berhasil ditambahkan!');
        }

        // Kalau belum ada → buat item baru
        Inventory::create([
            'barcode' => $request->barcode,
            'item_name' => 'New Item',
            'category' => 'Uncategorized',
            'stock' => 1,
            'minimum_stock' => 1,
            'unit' => 'pcs',
            'location' => 'Storage',
            'condition' => 'Good'
        ]);

        return redirect()->back()->with('success', 'Item baru berhasil ditambahkan!');
    }

    // ==============================
    // CRUD
    // ==============================

    public function create()
    {
        return view('adminnewitem');
    }

    public function store(Request $request)
    {
        $request->validate([
            'barcode' => 'nullable|unique:inventory,barcode',
            'item_name' => 'required',
            'category' => 'required',
            'stock' => 'required|integer',
            'minimum_stock' => 'required|integer',
            'unit' => 'required',
            'location' => 'required',
            'condition' => 'required'
        ]);

        Inventory::create($request->all());

        return redirect()->route('inventory.index')
            ->with('success', 'Item berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $item = Inventory::findOrFail($id);
        return view('editinventory', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Inventory::findOrFail($id);

        $request->validate([
            'item_name' => 'required',
            'category' => 'required',
            'stock' => 'required|integer',
            'minimum_stock' => 'required|integer',
            'unit' => 'required',
            'location' => 'required',
            'condition' => 'required'
        ]);

        $item->update($request->all());

        return redirect()->route('inventory.index')
            ->with('success', 'Item berhasil diupdate!');
    }

    public function destroy($id)
    {
        $item = Inventory::findOrFail($id);
        $item->delete();

        return redirect()->route('inventory.index')
            ->with('success', 'Item berhasil dihapus!');
    }
}
